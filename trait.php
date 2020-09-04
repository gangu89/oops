<?php

class abc 
{
  public function test()
  {
	echo "test from class ABC";
   }
}

trait test {
 
   public function test2()
	{
	echo "test2 method of test trait";
	}
} 

trait test2 {
  public function test3()
{
	echo "test3 method of test2 trait";
}

} 


class one extends abc {
	use test, test2;
}

class two extends abc {
	use test;
}

class three extends abc {

}

class four extends abc {

}

class five extends abc {

}


$obj = new one;
$obj->test3();
