<?php

class VideoStore
{

    private array $videos = [];

    public function __construct (Video ...$video) {
        $this->videos = $video;
    }

    public function addVideo (Video $video) : void {
        $this->videos[] = $video;
    }

    public function rentVideo (Video $video) : void {
        $video->isIn(false);
    }

    public function returnVideo (Video $video) : void {
        $video->isIn(true);
    }

    public function getAllVideos () : array {
        return $this->videos;
    }

    public function getIndex(string $title): ?Video {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                return $video;
            }
        }
        return null;
    }

    public function searchVideoByTitle(string $title): ?Video {
        foreach ($this->videos as $video) {
            if (strtolower($video->getTitle()) === strtolower($title)) {
                return $video;
            }
        }
        return null;
    }
}
