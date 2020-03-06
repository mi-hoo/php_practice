<?php

// 課題1
function twice($i) {
    $y = $i * 2;
   return $y; 
}
echo twice(5);
echo "\n";

// 課題2
function sum($a,$b) {
    $total = $a + $b;
    return $total;
}
echo sum(100,200);
echo "\n";

// 課題3
function times($arr) {
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    return $result;
    }
echo times(array(1,3,5,7,9));
echo "\n";

// 課題4
function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a) {
     $max_number = $a;
 }
 }
 return $max_number;
}
 echo max_array(array(1,9,6,15,8));
 echo "\n";

// 課題5
// strip_tags
$text = 'あいうえお<strong>かきくけこ</strong>';
$text = strip_tags($text);
echo $text;
echo "\n";

// array_push
$cities = array('tokyo','osaka','nagoya');
array_push ($cities,'yokohama','kyoto');
echo $cities[4];
echo "\n";

// array_merge
$kanto = array('tokyo','kanagawa','saitama');
$toukai = array('aichi','gifu','mie');
$kansai = array('osaka','hyougo','kyoto');
$prefectures = array_merge($kanto,$toukai,$kansai);
foreach($prefectures as $value) {
   echo $value;
   echo "\n";
}

// time
echo time();
echo "\n";

// mktime
$timestamp = mktime(18,45,8,5,3,2020);
echo $timestamp;
echo "\n";

// date
echo date('Y/m/d');
?>