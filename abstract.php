<?php

abstract class BaseEmployee {
    protected $firstname;
    protected $lastname; 

  public function getFullName()
    {
      return $this->firstname . " " . $this->lastname;
    }
  public function __construct($f, $l){
     $this->firstname = $f;
     $this->lastname = $l;
   }
    public abstract function getMonthSalary();

}

class FullTimeEmployee extends BaseEmployee {
 
    protected $annualSalary;

    public function getMonthSalary()
    {
     return $this->annualSalary / 12;
    }

}

class ContractEmployee extends BaseEmployee {

    protected $hourlyRate;
    protected $totalHours; 

   
    public function getMonthSalary()
    {
     return $this->hourlyRate * $this->totalHours;
    } 
  
}

//$employee = new BaseEmployee('Base','Employee');

$fulltime = new FullTimeEmployee('FullTime', 'Employee');
$contract = new ContractEmployee('Contract', 'Employee');
//echo $employee->getFullName().'<br>';
echo $fulltime->getFullName() .'<br>';
echo $contract->getFullName();

echo $fulltime->getMonthSalary() .'<br>';
echo $contract->getMonthSalary();

/*class FullTimeEmployee {
 
    protected $firstname;
    protected $lastname;
    protected $annualSalary;

    public function getFullName()
    {
      return $this->firstname . " " . $this->lastname;
    }
    public function getMonthSalary()
    {
     return $this->annualSalary / 12;
    }

   public function __construct($f, $l){
     $this->firstname = $f;
     $this->lastname = $l;
   }

}

class ContractEmployee {

    protected $firstname;
    protected $lastname;
    protected $hourlyRate;
    protected $totalHours; 

    public function getFullName()
    {
      return $this->firstname . " " . $this->lastname;
    }
    public function getMonthSalary()
    {
     return $this->hourlyRate * $this->totalHours;
    } 
  public function __construct($f, $l){
     $this->firstname = $f;
     $this->lastname = $l;
  }
   
}

$fulltime = new FullTimeEmployee('FullTime', 'Employee');
$contract = new ContractEmployee('Contract', 'Employee');

echo $fulltime->getFullName() .'<br>';
echo $contract->getFullName();

*/

/*class ABC {
    public abstract function xyz();
}


class def extends ABC {
  public function xyz()
  {
   echo 'hello world';
  }
 }*/
/*class ABC {

     public function xyz(){
      echo "Hi Gangu";
     }
}*/
