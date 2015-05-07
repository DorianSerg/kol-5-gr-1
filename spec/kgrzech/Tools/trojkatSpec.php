<?php

namespace spec\kgrzech\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class trojkatSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kgrzech\Tools\trojkat');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setH(2)->getH()->shouldReturn(2);
    }
}
