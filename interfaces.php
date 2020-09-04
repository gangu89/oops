<?php

abstract class def {

	public $data;
	
 	private function test1() {
	  echo 'test1';
	}
}


interface a{


	public function abc();

}

interface b{

	public function xyz();

}

class c implements a,b{

	public function abc()
	{
		echo 'abc function ';
	}
	
	public function xyz()
	{
		echo "xyz function";
	}

}


/*class a{
}

class b{

}

class c extends a,b{

}*/



/*interface abc{

	public function test();
	
	public function xyz();

}

class def implements abc {

	public function test() {
        
	echo "test function";

	}

	public function xyz() {
	
	echo "xyz function ";
	}
}
*/


