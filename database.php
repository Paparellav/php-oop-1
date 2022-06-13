<?php

class Movie
{
  public $title;
  public $genre;
  public $language;
  public $vote;

  function __construct($_title, $_genre, $_language, $_vote)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->language = $_language;
    $this->vote = $_vote;
  }

  public function getFilmsInfo()
  {
    return "Film: " . $this->title . "<br>" . "Genere: " . $this->genre . "<br>" . "Lingua: " . $this->language . "<br>" . "Voto: " . $this->vote;
  }
}

$TopGun = new Movie("Top Gun", "Adventure", "English(US)", 5);
$AmericanPie = new Movie("American Pie", "Comic", "English(UK)", 4);

?>