<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// print_r(array_change_key_case($age,CASE_UPPER));

$arr = array('aa','bb','cc','dd','ee');
// print_r(array_chunk($arr,2));

$a = array(
    $array1 = array(
     'id' => '1',
     'first_name' => 'abc',
    ),
    $arry2 = array(
        'id' =>'2',
        'first_name' => 'def',
    )
);
// print_r(array_column($a,'id','first_name'));

$test = array('aa','bb','cc');
$test2 = array('1','2','3');
// print_r(array_combine($test,$test2));

$arr3 = array('cat','dog','lion','cat');
// print_r(array_count_values($arr3));

$demo = array('cat','dog','lion','cat');
$demo2 = array('cat','dog','tiger','bear');
// print_r(array_diff($demo,$demo2));

$demo3 = array('1'=>'a','2'=>'b','3'=>'c');
$demo4 = array('1'=>'a','4'=>'d','3'=>'c');
// print_r(array_diff_assoc($demo3,$demo4));
// print_r(array_diff_key($demo3,$demo4));
// print_r(array_intersect_assoc($demo3,$demo4));
// print_r(array_intersect_key($demo3,$demo4));

$demo5 = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// print_r(array_flip($demo5));
// print_r(array_keys($demo5));

$demo6 =array('a'=>'abc','b'=>'def');
$demo7 =array('d'=>'sss','b'=>'ghi');
// print_r(array_merge_recursive($demo6,$demo7));

// $demo8 = array("Dog","Cat","Horse","Bear","Zebra");
// print_r(array_multisort($demo8));

$demo8=array("Dog","Cat","Horse","Bear","Zebra");
// array_multisort($a);
// print_r($a);

// array_pop($demo8);
// print_r($demo8);

// array_push($demo8,'lion');
// print_r($demo8);

// array_rand($demo8, 5);
// print_r($demo8);

$demo9 =array('a','b','c');
$demo10 =array('d','e','f');
// print_r(array_replace($demo9,$demo10));

$demo11 = array('a'=>'kk','b'=>'jj','c'=>'dd');
// print_r(array_reverse($demo11));
// echo array_search('kk',$demo11);
array_shift($demo11);
print_r($demo11);
?>