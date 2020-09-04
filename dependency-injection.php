<?php

//dependency-injection

class Logger {

	public function log($message)
	{
		echo "Logging message: $message";
	}
}

/*$logger = new Logger();
$logger->log("This is a message.");*/

class UserProfile {
	private $logger;

	public function createUser()
	{
	  //create user.
	//$logger = new Logger();
	$this->logger->log("create user.");	
	}
	public function updateUser()
	{
	  //Update user.
	//$logger = new Logger();
	$this->logger->log("Update user.");
	}
	public function deleteUser()
	{
	  //delete user.
	//$logger = new Logger();
	$this->logger->log("delete user.");	
	}

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;

	}
}


$logger = new Logger();
$profile = new UserProfile($logger);

$profile->createUser();
$profile->updateUser();


	


