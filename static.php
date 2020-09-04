<?php


class abc {
	
	public static $objectCount = 0;
	
	public static function getCount()
	{
		return self::$objectCount;
	}

	public function __construct()
	{
		self::$objectCount++;
	}

}

class xyz extends abc {

	public static function getCount()
	{
		parent::getCount();
		//new functionality here.
	}
}

$a = new abc();
$b = new abc();
$c = new abc();
$c = new abc();

echo abc::getCount();





/*class House {

	public static $size;
	
	public static function getSize()
	{
		return self::$size;
	}

	public static function setSize($s)
	{
		self::$size = $s;
	}

}

House::setSize(1200);
echo House::getSize();

*/


/*class abc {
	
	public static $data = 'test data';
	
	public static function xyz()
	{
		echo 'xyz function';
	}
}

echo abc::$data;
echo abc::xyz();*/


/*class abc {
	
	public $data;
	
	public function xyz()
	{
	
	}
}

$a = new abc();

$a->xyz();*/



