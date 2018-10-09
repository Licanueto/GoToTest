<?php
namespace model;

class Venue
{

    private $id;
    private $name;
    private $address;
    private $city;
    private $maxCapacity;
    private $seatType;

    public function __construct($name,$address,$city,$seatAvailability,$seatType,$id = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->seatAvailability = $seatAvailability;
        $this->seatType = $seatType;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getCity(){
        return $this->city;
    }
    public function getSeatAvailability(){
        return $this->seatAvailability;
    }
    public function getSeatType(){
        return $this->seatType;
    }
    ///Debe tener un metodo para agregar un nuevo seatType;

}


?>
