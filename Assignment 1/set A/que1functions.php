<?php

    function countVowels($str)
    {
        $i = 0;
        $cnt_a = 0;
        $cnt_e = 0;
        $cnt_i = 0;
        $cnt_o = 0;
        $cnt_u = 0;
        for($i = 0; $i < strlen($str); $i++)
        {
            if($str[$i] == 'a' || $str[$i] == 'A')
            {
                $cnt_a += 1;
            }
            if($str[$i] == 'e' || $str[$i] == 'E')
            {
                $cnt_e += 1;
            }
            if($str[$i] == 'i' || $str[$i] == 'I')
            {
                $cnt_i += 1;
            }
            if($str[$i] == 'o' || $str[$i] == 'O')
            {
                $cnt_o += 1;
            }
            if($str[$i] == 'u' || $str[$i] == 'U')
            {
                $cnt_u += 1;
            }
        }
        echo "Total vowels in ",$str," = ", ($cnt_a + $cnt_e + $cnt_i + $cnt_o + $cnt_u), "<br>";
        echo "Total a = ",$cnt_a,"<br>";
        echo "Total e = ",$cnt_e,"<br>";
        echo "Total i = ",$cnt_i,"<br>";
        echo "Total o = ",$cnt_o,"<br>";
        echo "Total u = ",$cnt_u,"<br>";
    }

    function checkPalindrome($str)
    {
        for($i = 0; $i < strlen($str); $i++)
        {
            if($str[$i] != $str[strlen($str) - $i - 1])
                break;
        }
        if ($i < strlen($str)) {
            echo $str," is not palindrome";
        }
        else {
            echo $str," is palindrome";
        }
    }

?>