<?php

// classe
class Movie {
    // parametri o chiavi 
    private $title;
    private $subtitle;
    private $duration;
    private $movie_director;


    // funzione costruttore
    function __construct(string $_title, string $_subtitle, int $_duration, string $_movie_director){

        $this -> setTitle($_title);
        $this -> setSubTitle($_subtitle);
        $this -> setDuration($_duration);
        $this -> getMovie_director($_movie_director);

    }


    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of movie_director
     */ 
    public function getMovie_director()
    {
        return $this->movie_director;
    }

    /**
     * Set the value of movie_director
     *
     * @return  self
     */ 
    public function setMovie_director($movie_director)
    {
        $this->movie_director = $movie_director;

        return $this;
    }


    // funzione che compone il nome completo del film 
    public function getFullName (){
        return $this->title . " " . $this->subtitle;
      }
    

}


?>