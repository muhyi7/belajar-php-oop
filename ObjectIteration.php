<?php

class Data implements IteratorAggregate
{
    public string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];

        // Memasukkan properti private ke iterator di dalam kelas
        return new ArrayIterator($array);
    }
}

$data = new Data;

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
