<?php
namespace model;

class Event
{
  private $id;
  private $name;
  private $calendar;
  private $eventPlace;

  function __construct($name,$cal,$evP,$id = '')
  {
    $this->id = $id;
    $this->name = $name;
    $this->calendar = $cal;
    $this->eventPlace = $evP;
  }

  public function getCalendar()
  {
    return $this->calendar;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEventPlace()
  {
    return $this->eventPlace;
  }

}




 ?>
