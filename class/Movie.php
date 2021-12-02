<?php
class Movie
{
    public $title;
    public $poster;
    public $director;
    public $genre;
    public $release_date;
    public $plot;

    // Construct function
    function __construct($title, $poster, $director, $genre, $release_date, $plot)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->director = $director;
        $this->genre = $genre;
        $this->release_date = $release_date;
        $this->plot = $plot;
    }
    // *********************** 
    // SET - GET (Title)
    // public function getTitle()
    // {
    //     return $this->title;
    // }

    //*******************************************************************
    //Method - Ritorna un imagine di default se non fosse presente la locandina
    public function getSrc()
    {
        $checkSrc = is_file($this->poster);
        if (!$checkSrc) {
            return $this->poster = "./img/missing-img.jpg";
        } else {
            return $this->poster;
        }
    }
}
