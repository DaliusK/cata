<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('FizzBuzz');
    }


    function it_should_return_0_if_number_is_zero()
    {
        $this->fizz(0)->shouldReturn(0);
    }

    function it_should_return_1_if_number_is_1()
    {
        $this->fizz(1)->shouldReturn(1);
    }

    function it_should_return_fizz_if_number_is_3()
    {
        $this->fizz(3)->shouldReturn("fizz");
    }

    function it_should_return_buzz_if_number_is_5()
    {
        $this->fizz(5)->shouldReturn("buzz");
    }

    function it_should_return_fizzbuzz_if_number_is_15()
    {
        $this->fizz(15)->shouldReturn("fizzbuzz");
    }
}
