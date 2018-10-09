<?php
namespace model;

class Calendar
{
  private $id;
  private $artists;
  private $venue;
  private $event;

  function __construct($artists, $venue, $event, $id='')
  {
    $this->id = $id;
    $this->$artists = $artists;
    $this->$venue = $venue;
    $this->$event = $event;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getArtists()
  {
    return $this->$artists;
  }

  public function getVenue()
  {
    return $this->venue;
  }

  public function getEvent()
  {
    return $this->event;
  }
  
}



 ?>
