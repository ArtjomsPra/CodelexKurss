<?php

class Application
{
private VideoStore $videoStore;

public function __construct () {
    $this->videoStore = new VideoStore();
}

    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";
            echo "Choose 5 to rate a video \n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory($this->videoStore->getAllVideos());
                    break;
                case 5:
                    $this->rateVideo();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
    private function addMovies() : void
    {
        echo "Enter title: ";
        $title = readline();
        $video = new Video($title);
        $this->videoStore->addVideo($video);
        echo "You have added movie $title to the Video Store" . PHP_EOL;
    }

    private function rentVideo()
    {
        $videos = $this->videoStore->getAllVideos();
        $this->listInventory($videos);

        echo "Enter the title of the video you want to rent: ";
        $title = strtolower(readline());

        $video = null;
        foreach ($this->videoStore->getAllVideos() as $v) {
            if (strtolower($v->getTitle()) === $title) {
                $video = $v;
                break;
            }
        }

        if ($video) {
            $this->videoStore->rentVideo($video);
            echo "You have rented the movie {$video->getTitle()}" . PHP_EOL;
            $video->isOut(false);
        } else {
            echo "Sorry, the movie you want to rent is not in the store." . PHP_EOL;
        }

    }

    private function returnVideo()
    {
        $videos = $this->videoStore->getAllVideos();
        $this->listInventory($videos);

        echo "Enter the title of the video you want to return: ";
        $title = readline();

        $video = $this->videoStore->getIndex($title);

        if ($video && $video->isIn() == 'Not Available') {
            $this->videoStore->returnVideo($video);
            echo "You have returned the movie {$video->getTitle()}" . PHP_EOL;
            $video->isOut(true);
        } else {
            echo "Sorry, the movie is not available to return." . PHP_EOL;
        }

    }

    private function listInventory(array $videos)
    {
    echo "Currently we have this videos in our store:" . PHP_EOL;
        foreach ($this->videoStore->getAllVideos() as $video) {
            /** @var Video $video */
            echo "Title: {$video->getTitle()}, rating: {$video->getAverageRating()}, availability: {$video->isIn()}" . PHP_EOL;
        }
    }

    private function rateVideo() : void {

        $videos = $this->videoStore->getAllVideos();
        $this->listInventory($videos);

        echo "Enter the title of the video you want to rate: ";
        $title = readline();

        $video = $this->videoStore->searchVideoByTitle($title);

        if ($video) {
            echo "Enter a rating for the movie (1-10): ";
            $rating = readline();

            if ($rating >= 1 && $rating <= 10) {
                $video->receiveRating($rating);
                echo "You have rated the movie {$video->getTitle()} with a {$rating}" . PHP_EOL;
            } else {
                echo "Invalid rating. Please enter a number between 1 and 10." . PHP_EOL;
            }
        } else {
            echo "Sorry, the movie you want to rate is not in the store." . PHP_EOL;
        }
    }
}