<?php

    include 'que1functions.php';

    $str = $_POST['str'];
    $choice = $_POST['choice'];

    switch($choice)
    {
        case 1:
            countVowels($str);
        break;
        case 2:
            checkPalindrome($str);
    }


?>