<?php
    $str="Hello diu";
    //(TO LOWER)
    echo strtolower($str)."<br>";
    //(TO UPPER)
    echo strtoupper($str)."<br>";
    //(REPLACE)
    echo str_replace("diu", "maria", $str)."<br>";
    //(WORD COUNT)
    echo str_word_count($str)."<br>";
    //(REVERSE)
    echo strrev($str);