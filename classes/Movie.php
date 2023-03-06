<?php

class Movie{
    public $title;
    public $genere;
    public $duration;
    public $year;
    public $director;
    public $poster;
    public static $count = 0;
    public function __construct($_title,array $_genere,$_year,$_director,$_duration = null,$_poster = null)
    {
        $this->title=$_title;
        $this->genere=$_genere;
        $this->duration=$_duration;
        $this->year=$_year;
        $this->director=$_director;
        $this->poster=$_poster;
        self ::$count ++;
    }
    public function printMovie()
    {
        echo "<h1>";
        echo $this->title;
        echo "</h1>";

        echo "<p>";
        echo $this->duration;
        echo "</p>";

        echo "<h1>";
        echo $this->year;
        echo "</h1>";

        foreach($this->genere as $singleGenere){
            echo "<h1>";
            echo $singleGenere;
            echo "</h1>";
        }
        echo "<h1>";
        echo $this->director;
        echo "</h1>";
        echo "<h1>";
        echo $this->poster;
        echo "</h1>";
    }
    public static function getCount()
    {
        return self::$count;
    }
}