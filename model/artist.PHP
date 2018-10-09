<?php
namespace model;

class Artist
{
  private $id;
  private $name;
  private $desc;

  function __construct($name, $desc, $id='')
  {
    $this->id = $id;
    $this->name = $name;
    $this->desc = $desc;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDesc()
  {
    return $this->desc;
  }

  public function setDesc($desc)
  {
    $this->desc = $desc;
  }

}


 ?>
