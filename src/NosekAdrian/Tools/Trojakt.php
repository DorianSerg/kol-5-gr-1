<?php

namespace NosekAdrian\Tools;

class Trojakt
{
    private $a;
    private $b;

    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    public function getB()
    {
        return $this->b;
    }

    public function poletrojkata()
    {
        return $this->a * $this->b * 1/2;
    }
}
