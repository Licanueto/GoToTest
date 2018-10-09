<?php
namespace model;

class Seat
{
  private $id;
  private $quant;
  private $price;
  private $remaining;
  private $seatType;

  function __construct($quant, $price, $remaining, $seatType, $id = '')
  {
    $this->id = $id;
    $this->quant = $quant;
    $this->$remaining = $remaining;
    $this->price = $price;
    $this->seatType = $seatType;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getQuantity()
  {
    return $this->quant;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getRemaining()
  {
    return $this->remaining;
  }

  public function getSeatType()
  {
    return $this->seatType;
  }
}




 ?>
