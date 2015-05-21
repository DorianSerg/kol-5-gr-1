<?php

namespace spec\vincenti\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class poletrojkataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('vincenti\Tools\poletrojkata');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setH(987)->getH()->shouldReturn(987);
    }
    function it_should_calculate_field()
    {
        $this->setA(4)->setH(2)->field()->shouldReturn(4.0);
    }
}
