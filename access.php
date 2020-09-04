<?php

class TV {
   protected $model;
   private $volume;

   public  function volumeUp()
	{
	  $this->volume++;
	}

   public  function volumeDown()
	{
	  $this->volume--;
	} 
  public function  __construct($m, $v)
	{
          $this->model = $m;
          $this->volume = $v;
	}

   protected function getmodel(){
           return $this->model;
	}
}


class plazma extends TV {
 public function getmodel(){
           return $this->model;
	}
	
  }

$tv_plazma = new plazma('plazma', 1);
echo $tv_plazma->getmodel();
//echo $tv_plazma->model;


