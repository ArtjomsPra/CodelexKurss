<?php
class Video
{
    private string $title;
    private bool $isIn;
    private array $ratings = [];

    public function __construct ($title) {
        $this->title = $title;
        $this->isIn = true;
        $this->ratings = [];
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function isIn() : string
    {
        return ($this->isIn) ? "Available" : "Not Available";

    }

    public function isOut($checked) : void
    {
        $this->isIn = $checked;
    }

    public function receiveRating (int $rating) : void {
        $this->ratings[] = $rating;
    }

    public function getAverageRating () {
        if (count($this->ratings) == 0) {
            return 0;
        }
        return array_sum($this->ratings) / count($this->ratings);
    }


}

