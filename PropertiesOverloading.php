<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->properties[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        $join = join("", $arguments);
        echo "Call function $name with arguments $join". PHP_EOL;
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $join = join("", $arguments);
        echo "Call static function $name with arguments $join". PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Eko";
$zero->middleName = "Kurniawan";
$zero->lastName = "Khannedy";

echo "First Name : $zero->firstName". PHP_EOL;
echo "First Name : $zero->middleName". PHP_EOL;
echo "First Name : $zero->lastName" . PHP_EOL;

$zero->sayHello("Eko", "Khannedy");
Zero::sayHello("Eko", "Khannedy");