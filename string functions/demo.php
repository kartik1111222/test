<?php

$str1 = addcslashes('Hello World', 'o');
// print_r($str1);

$str2 = addslashes("user's name");
// print_r($str2);

$str3 = bin2hex('Hello World');
// print_r($str3);

$str4 = 'Hello World';
// print_r(explode(" ", $str4));

$str5 = array('hello', 'world', 'test');
// print_r(implode(' ', $str5)); 

$str6 = array('1','2','3');
// print_r(join($str6));

$str7 = 'HELLO WORLD';
// print_r(lcfirst($str7));

$str8 = 'hello world';
// print_r(ucfirst($str8));

$str9 = str_ireplace('World','Demo', 'Hello World');
// print_r($str9);

$str10 = str_repeat('Hello', 5);
// print_r($str10);

$str11 = str_shuffle('hello world');
// print_r($str11);

$str12 = str_split('hello world');
// print_r($str12);

$str13 = str_word_count('hello world');
// print_r($str13); 

$str14 = strlen('helloworld');
// print_r($str14);

$str15 = strrev('hello world');
// print_r($str15);

$str16 = substr('hello world', 8);
// print_r($str16);

$str17 = 'hello world';
// print_r(strtoupper($str17));

$str18 = 'HELLO WORLD';
// print_r(strtolower($str18));

$str19 = 'hello world';
print_r(ucwords($str19));

?>
