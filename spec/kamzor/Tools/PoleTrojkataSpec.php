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
}
