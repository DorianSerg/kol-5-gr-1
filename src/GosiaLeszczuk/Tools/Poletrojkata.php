<?php

namespace GosiaLeszczuk\Tools;

class Poletrojkata
{
    private $a;
    private $b;
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

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    
    function it_should_calculate_multiply()
{
    $this->setA(4)->setB(4)->multiply()->shouldReturn(8);
    
    
}

public function multiply()
{
    return $this->a * $this->b * 0.5;
}


}
