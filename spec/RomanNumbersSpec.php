<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_should_return_I_when_number_is_1()
    {
        $this->roman(1)->shouldBe("I");
    }

    function it_should_return_V_when_number_is_5()
    {
        $this->roman(5)->shouldBe("V");
    }

    function it_should_return_X_when_number_is_10()
    {
        $this->roman(10)->shouldBe("X");
    }

    function it_should_return_L_when_number_is_50()
    {
        $this->roman(50)->shouldBe("L");
    }

    function it_should_return_C_when_number_is_100()
    {
        $this->roman(100)->shouldBe("C");
    }

    function it_should_return_D_when_number_is_500()
    {
        $this->roman(500)->shouldBe("D");
    }

    function it_should_return_M_when_number_is_1000()
    {
        $this->roman(1000)->shouldBe("M");
    }

    function it_should_return_II_when_number_is_2()
    {
        $this->roman(2)->shouldBe("II");
    }

    function it_should_return_III_when_number_is_3()
    {
        $this->roman(3)->shouldBe("III");
    }

    function it_should_return_IV_when_number_is_4()
    {
        $this->roman(4)->shouldBe("IV");
    }

    function it_should_return_VI_when_number_is_6()
    {
        $this->roman(6)->shouldBe("VI");
    }

    function it_should_return_VII_when_number_is_7()
    {
        $this->roman(7)->shouldBe("VII");
    }

    function it_should_return_VIII_when_number_is_8()
    {
        $this->roman(8)->shouldBe("VIII");
    }

    function it_should_return_IX_when_number_is_9()
    {
        $this->roman(9)->shouldBe("IX");
    }


    function it_should_return_XI_when_number_is_11()
    {
        $this->roman(11)->shouldBe("XI");
    }

    function it_should_return_XII_when_number_is_12()
    {
        $this->roman(12)->shouldBe("XII");
    }

    function it_should_return_XIII_when_number_is_13()
    {
        $this->roman(13)->shouldBe("XIII");
    }

    function it_should_return_XIV_when_number_is_14()
    {
        $this->roman(14)->shouldBe("XIV");
    }

    function it_should_return_XV_when_number_is_15()
    {
        $this->roman(15)->shouldBe("XV");
    }

    function it_should_return_XVI_when_number_is_16()
    {
        $this->roman(16)->shouldBe("XVI");
    }

    function it_should_return_XIX_when_number_is_19()
    {
        $this->roman(19)->shouldBe("XIX");
    }

    function it_should_return_XX_when_number_is_20()
    {
        $this->roman(20)->shouldBe("XX");
    }

    function it_should_return_XXI_when_number_is_21()
    {
        $this->roman(21)->shouldBe("XXI");
    }

    function it_should_return_XXXVI_when_number_is_36()
    {
        $this->roman(36)->shouldBe("XXXVI");
    }

    function it_should_return_XXXIX_when_number_is_39()
    {
        $this->roman(39)->shouldBe("XXXIX");
    }

    function it_should_return_XL_when_number_is_40()
    {
        $this->roman(40)->shouldBe("XL");
    }

    function it_should_return_XLI_when_number_is_41()
    {
        $this->roman(41)->shouldBe("XLI");
    }

    function it_should_return_XLVII_when_number_is_47()
    {
        $this->roman(47)->shouldBe("XLVII");
    }

    function it_should_return_LIII_when_number_is_53()
    {
        $this->roman(53)->shouldBe("LIII");
    }

    function it_should_return_LXXXIX_when_number_is_89()
    {
        $this->roman(89)->shouldBe("LXXXIX");
    }

    function it_should_return_XC_when_number_is_90()
    {
        $this->roman(90)->shouldBe("XC");
    }

    function it_should_return_CLIX_when_number_is_159()
    {
        $this->roman(159)->shouldBe("CLIX");
    }

    function it_should_return_CXCIX_when_number_is_199()
    {
        $this->roman(199)->shouldBe("CXCIX");
    }

    function it_should_return_CC_when_number_is_200()
    {
        $this->roman(200)->shouldBe("CC");
    }

    function it_should_return_CD_when_number_is_400()
    {
        $this->roman(400)->shouldBe("CD");
    }

    function it_should_return_CDLXXXVI_when_number_is_486()
    {
        $this->roman(486)->shouldBe("CDLXXXVI");
    }

    function it_should_return_DI_when_number_is_501()
    {
        $this->roman(501)->shouldBe("DI");
    }

    function it_should_return_CM_when_number_is_900()
    {
        $this->roman(900)->shouldBe("CM");
    }

    function it_should_return_MI_when_number_is_1001()
    {
        $this->roman(1001)->shouldBe("MI");
    }

    function it_should_return_MMDCXCIX_when_number_is_2699()
    {
        $this->roman(2699)->shouldBe("MMDCXCIX");
    }

    /*function it_should_work_up_to_20000()
    {
        for ($i = 1; $i <= 20000; $i++) {
            $this->roman($i)->shouldBe($this->romanic_number($i));
        }
    }

    // http://stackoverflow.com/questions/14994941/numbers-to-roman-numbers-with-php
    function romanic_number($integer, $upcase = true)
    {
        $table = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9, 'V'=>5, 'IV'=>4, 'I'=>1);
        $return = '';
        while($integer > 0)
        {
            foreach($table as $rom=>$arb)
            {
                if($integer >= $arb)
                {
                    $integer -= $arb;
                    $return .= $rom;
                    break;
                }
            }
        }

        return $return;
    }*/

}
