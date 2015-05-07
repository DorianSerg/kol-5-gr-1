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
}
