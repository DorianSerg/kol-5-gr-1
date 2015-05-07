<?php

namespace kgrzech\Tools;

class trojkat
{

     private $a;
     private $h;
     private $c;

    public function setC($c)
    {
        $this->a = $c;

        return $this;
    }
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
     public function getC()
    {
        return $this->c;
    }

    public function getH()
    {
        return $this->h;
    }

    public function pole()
    {
    return $this->a * $this->h * $this ->c;
    
    
    }
}
