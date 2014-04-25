<?php

class RomanNumbers
{

    private $_map = array(
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    );

    private function real_roman($n, $map)
    {
        if ($n <= 0) {
            return '';
        }

        if (!isset($map[$n])) {
            $key = key($map);
            if ($n >= $key) {
                $n -= $key;
                $val = $map[$key];
            } else {
                $val = '';
            }

            if ($n < $key) {
                unset($map[$key]);
            }

            return $val . $this->real_roman($n, $map);
        } else {
            return $map[$n];
        }
    }

    public function roman($n)
    {
        /**
         * No loops, recursion only
         */
        krsort($this->_map, SORT_NUMERIC);
        return $this->real_roman($n, $this->_map);


        /**
         * Loop - geriausias sprendimas
         */
        $map = array(
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I'
        );

        $str = '';
        foreach ($map as $num => $letter) {
            while ($n >= $num) {
                $str .= $letter;
                $n -= $num;
            }
        }

        return $str;


        /**
         * Pirminis variantas
         */
        /*if ($n < 4) {
            return str_repeat('I', $n);
        }

        if ($n < 9) {
            return $n === 4 ? "IV" : 'V' . str_repeat('I', $n-5);
        }

        if ($n < 14) {
            return $n === 9 ? "IX" : 'X' .  str_repeat('I', $n-10);
        }

        if ($n < 40) {
            return 'X' . $this->roman($n-10);
        }

        if ($n < 50) {
            return 'XL' . $this->roman($n-40);
        }

        if ($n < 90) {
            return 'L' . $this->roman($n-50);
        }

        if ($n < 100) {
            return 'XC' . $this->roman($n-90);
        }

        if ($n < 400) {
            return 'C' . $this->roman($n-100);
        }

        if ($n < 500) {
            return 'CD' . $this->roman($n-400);
        }

        if ($n < 900) {
            return 'D' . $this->roman($n - 500);
        }

        if ($n < 1000) {
            return 'CM' . $this->roman($n-900);
        }

        return "M" . $this->roman($n-1000);*/
    }
}
