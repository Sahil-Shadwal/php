
<?php

require 'functions.php';

// require 'router.php';

class Person
{
    public $name;
    public $age;

    public function breathe()
    {
        // echo "breathing fire";
        echo $this->name . 'is breathing';
    }
}

$person = new Person();

$person->name = "Jack Sparrow";
$person->age = 21;

// dd($person->breathe());
$person->breathe();
