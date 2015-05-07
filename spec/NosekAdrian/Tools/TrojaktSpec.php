<?php

namespace spec\NosekAdrian\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrojaktSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('NosekAdrian\Tools\Trojakt');
    }
    
    function it_should_have_setter_and_getter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
    
    function it_should_calculate_pole()
    {
        $this->setA(5)->setB(10)->poletrojkata()->shouldReturn(25);
    }
}
