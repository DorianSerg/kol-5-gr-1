<?php

namespace spec\GosiaLeszczuk\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PoletrojkataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('GosiaLeszczuk\Tools\Poletrojkata');
    }
    
   function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    } 
    
      function it_should_calculate_multiply()
{
    $this->setA(4)->setB(4)->multiply()->shouldReturn(8.0);
    
    
}
}
