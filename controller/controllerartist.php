<?php
namespace Controller;

use Model\Artist as M_Artist;
use DAO\ListArtist as D_Artist;

class ControllerArtist
{
  private $DAO_Artist;

  function __construct()
  {

    $this->DAO_Artist = D_Artist::getInstance();

  }

  function index()
  {
    include(ROOT.'Views/index.php');
  }

  function addArtist($name, $desc = '')
  {
    $objArtist = new M_Artist($name, $desc);
    $this->DAO_Artist->add($objArtist);
    echo '<pre>';
    var_dump($this->DAO_Artist->getArtistList());
    echo '</pre>';
    //print_r($this->DAO_Artist->getArtistList());


  }

}



 ?>
