<?php
namespace model;

class SeatType
{

    private $id;
    private $name;


    function __construct($name, $id = '')
    {
      $this->id = $id;
      $this->name = $name;
    }

    public function getId()
    {
      return $this->id;
    }

    public function getName()
    {
      return $this->name;
    }


}


?>
