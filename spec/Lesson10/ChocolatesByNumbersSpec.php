<?php

namespace spec\Lesson10;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ChocolatesByNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lesson10\ChocolatesByNumbers');
    }
}