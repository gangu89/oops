<?php

trait abc {

	private function xyz()
	{
	  echo "XYZ method from trait abc";
	}
}

class test {
	use abc{
	    abc::xyz as public abcxyz;	
	}
}

$obj = new test;

//$obj->xyz();
$obj->abcxyz();



