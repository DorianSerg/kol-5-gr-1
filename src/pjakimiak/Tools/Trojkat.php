<?php

namespace pjakimiak\Tools;

class Trojkat
{

    private $a;
    private $b;
    private $c;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
    
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    
    public function getC()
    {
        return $this->c;
    }
    
    function it_should_calculate_pole()
    {
    $this->setA(1)->setB(2)->setC(0.5)->pole()->shouldReturn(1.0);
    }
    
    public function pole()
    {
    return $this->a * $this->b * $this->c;
    }

}
