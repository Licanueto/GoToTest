<?php
namespace model;

class Purchase
{
  private $id;
  private $date;

  function __construct($date, $id = '')
  {
    $this->id = $id;
    $this->date = $date;
  }
}




 ?>
