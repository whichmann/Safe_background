<?php

spl_autoload_register(function ($class_name) 
    {
        include $class_name . '.php';
    }
);

$safe1 = new Safe("password123"); echo $safe1;

echo $safe1->getHint();

echo $safe1->getPassword(42);

echo "<br>";

$safe1->unlock("password123");

echo "<br>";

echo $safe1->store("First sentence.");

echo $safe1->store("2nd sentence.");

$safe1->lock();

echo $safe1->store("Sentence #3.");

echo $safe1->store("Last one so far.");

$safe1->seeRecords();

$safe1->unlock("password123");

$safe1->seeRecords();

$safe2 = new premiumSafe("OOBisOk");

echo "<br>";

echo $safe2;

$safeStandard = safeFactory::create("anotherPass");

echo $safeStandard;

$safe3 = safeFactory::create("anotherPass", "p");

echo $safe3;
