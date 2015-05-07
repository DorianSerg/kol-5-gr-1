<?php

namespace kamajo5\Tools;

class Kalkulator
{
    private $a;
    private $h;
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }
    public function setH($h)
    {
        $this->h = $h;
        return $this;
    }
    public function getA()
    {
        return $this->a;
    }
    public function getH()
    {
        return $this->h;
    }

    public function triangle()
    {
        return $this->a * $this->h * 0.5;
    }
}