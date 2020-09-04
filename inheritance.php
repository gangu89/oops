<?php

class TV {
   public $model;
   public $volume;

    function volumeUp()
	{
	  $this->volume++;
	}

    function volumeDown()
	{
	  $this->volume--;
	} 
  function  __construct($m, $v)
	{
          $this->model = $m;
          $this->volume = $v;
	}
}


class plazmaTv extends TV {

 public $model = 'def';

 function __construct()
	{

	}	

}


$plazma = new plazmaTv;

echo $plazma->model;



/*class TvWithTimer extends TV {
   
    public $timer = true;
}

class plazmaTv extends TV {

 public $plazma = true;

}

$tv = new TvWithTimer('Tv with timer', 2);
$plazma = new plazmaTv('plazma Tv', 3);
echo $plazma->model;*/

/*$tv = new TV('def', 2);
$tv_one = new TV('abc', 4);

echo $tv_one->model.'<br/>';
echo $tv_one->model = 'gangu'.'<br/>';
echo $tv->model;*/


