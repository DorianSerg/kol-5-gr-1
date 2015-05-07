<?php

namespace spec\kamzor\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoleTrojkataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamzor\Tools\PoleTrojkata');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    
    function it_should_calculate_field_triangle()
    {
        $this->setA(2)->setH(4)->triangle()->shouldReturn(4.0);
    }
    
 
}
