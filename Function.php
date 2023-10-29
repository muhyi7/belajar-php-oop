<?php

require_once "data/Person.php";

$eko = new Person();
$eko->name = "Eko";
$eko->sayHello("Budi");

$eko = new Person();
$eko->name = "Joko";
$eko->sayHello(null);
