<?php

abstract class SafeAbstract 
{
    public $serialNumber = 1;
    public $manufacturer = "KW Ltd.";

    abstract public function getPassword($hint); //done in safe.php
    abstract public function lock(); //done in safe.php
    //abstract function addSerialNumber(); //absolutely no idea how to implement it, tried everything
    public function __toString() //throws out obj description
    {
        return "<br>This is a " . $this->model . " of Storage DB<sup>TM</sup> created by " . $this->manufacturer . "<br>";
    }
}