<?php

class FizzBuzz
{
    public function fizz($n)
    {
        if ($n === 0) {
            return 0;
        }

        $str = '';

        if ($n % 3 === 0) {
            $str = 'fizz';
        }

        if ($n % 5 === 0) {
            $str .= 'buzz';
        }

        return $str !== '' ? $str : $n;
    }
}
