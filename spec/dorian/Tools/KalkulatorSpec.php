<?php

namespace spec\dorian\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dorian\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(3)->getB()->shouldReturn(3);
        $this->setH(4)->getH()->shouldReturn(4);
    }
    
    function it_should_calculate_sum()
    {
        $this->setA(2)->setB(3)->setH(4)->sum()->shouldReturn(24);
    }
}