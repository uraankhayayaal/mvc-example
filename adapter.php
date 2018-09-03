<?php

trait TAdaptee
{
    public function sum(int $a, int $b)
    {
        $method = $this->method;
        return $this->$method($a, $b);
    }
}

class SomeClass
{
    use TAdaptee;
    private $method = 'someSum';
    public function someSum($a, $b)
    {
        return $a + $b;
    }
}

class AnotherClass
{
    use TAdaptee;
    private $method = 'anotherSum';
    public function anotherSum($a, $b)
    {
        return $a + $b;
    }
}

// $some = new SomeClass;
// $another = new AnotherClass;
// $some->sum(2,2);
// $another->sum(5,2);