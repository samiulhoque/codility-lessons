<?php

namespace spec\Lesson10;

use PhpSpec\ObjectBehavior;

class ChocolatesByNumbersSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('Lesson10\ChocolatesByNumbers');
    }
}
