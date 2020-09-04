<?php

class TV {
   public $model = 'xyz';
   public $volume = 1;

    function volumeUp()
	{
	  $this->volume++;
	}

    function volumeDown()
	{
	  $this->volume--;
	} 
  
}

$tv_one = new TV;
$tv_two = new TV;

$tv_one->volumeUp();
$tv_two->volumeUp();
echo $tv_one->volume;

echo $tv_one->model = 'abc'.'<br/>';
echo $tv_two->model;








/*


function add($a,$b){
  $abc = 5;
  return $c = $a + $b
}

$r = add(5,5);*/

