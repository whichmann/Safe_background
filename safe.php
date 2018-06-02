<?php

class Safe extends safeAbstract
{
    //public $serialNumber = 1; //no idea how to implement it right now
    private $password;
    private $content = array();
    protected $model = "1st Gen";
    public $manufacturer = "KW Ltd.";
    private $capacity = 6;
    private $numberOfSecrets = 0;
    public $locked = true;
    
    public function __construct($password) //the only var provided to the new object is its password which is set when the obj is created
    {
        $this->password = $password;
        //$this->addSerialNumber(); <-would be nice to just add consecutive number to each new object within the class
    }

    public function getPassword($hint) //function is public but requires a ,,key" to succesfully return the password 
    {
        if ($hint == "42")
        {
            return $this->password . "<br";
        }
        else
        {
            return "<br>Access denied, please provide correct hint.<br>";
        }
    }


    
    public function getHint() //to be adjustable
    {
        return "<br>Answer to the question about the meaning of life.<br>";
    }

    public function unlock($password)
    {
        if ($password == $this->password)
        {
            $this->locked = false;
        }
        else
        {
            echo "<br>In order to unlock the safe, please provide correct password.<br>";
        }
    }

    public function lock()
    {
        $this->locked = true;
    }

    public function store($sentence)
    {
        if ($this->locked == false AND $this->numberOfSecrets<$this->capacity)
        {
            $this->content[$this->numberOfSecrets] = $sentence;
            $this->numberOfSecrets++;
            return "<br>Okay, the message's been stored. Remaining capacity: " . ($this->capacity - $this->numberOfSecrets) . "<br>";
        }
        else
        {
            return "<br>Storage DB is either locked or full.<br>";
        }
    }

    public function seeRecords()
    {
        if ($this->locked == 0)
        {
            echo "<br>Following records have been stored so far:<br>";
            for($x = 0; $x < $this->numberOfSecrets; $x++) 
            {
                echo $this->content[$x];
                echo "<br>";
            }
        }
        else
        {
            echo "<br>Please unlock the safe to see its content.";
        }
    }


}
