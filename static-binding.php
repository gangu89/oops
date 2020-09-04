<?php

class DB{

	protected static $table = 'basetable';

	public function select()
	{
		echo "select *from " . static::$table;
	}

	public function insert()
	{
		echo "Insert INTO ". static::$table;
	}
}

class abc extends DB {

	protected static $table = 'abc';
}

$abc = new abc;

$abc->select();


