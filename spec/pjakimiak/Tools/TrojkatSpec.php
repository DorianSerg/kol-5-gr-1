<?php

namespace spec\pjakimiak\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrojkatSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pjakimiak\Tools\Trojkat');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
}
