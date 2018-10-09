<?php
namespace DAO;

class ListArtist extends SingletonDAO implements IDAO
{

  private $artist;

  function __construct()
  {

      $this->artist = array();


  }

  public function add($obj)
  {
    if(isset($_SESSION))
    {
      $arrayArtist = $_SESSION['artist'];
    }
    $arrayArtist[]= $obj;
    $_SESSION['artist'] = $arrayArtist;

    
  }

  public function retrieve($obj)
  {

  }

  public function update($obj)
  {

  }

  public function delete($obj)
  {

  }

  public function getArtistList()
  {
    return $_SESSION['artist'];
  }
}


 ?>
