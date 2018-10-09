<?php
namespace Config;

 class Autoload
{
	public static function Start()
	{
        spl_autoload_register(function($instance)
        {
            //  print_r($instance.'<br>');
              $route=ROOT.strlower(str_replace("\\","/",$instance)).".php";
              include_once($route);
            //  print_r($route.'<br>');
              //print_r($instance);
        });
     }
 }
 ?>
