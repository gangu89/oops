<?php

trait one {

	public function test(){
	echo "TEST method from one trait.";
	}
}

trait two {

public function test(){
	echo "TEST method from one trait.";
	}
}

class abc {

use one,two{
    one::test insteadof two; //individual trait  access
    one::test as OneTest;
}	

}

$obj = new abc;

//$obj->test(); //individual trait access
$obj->OneTest();

