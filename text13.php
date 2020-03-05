<?php

// 課題1
function twice($i) {
   echo $i * 2; 
}
twice(5);

// 課題2
function sum($a,$b) {
    echo $a + $b;
}
sum(100,200);

// 課題3
function times() {
$arr = array(1,3,5,7,9);
$result = array_product($arr);
return $result;
}
echo times();

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

// 課題5
// strip_tags
$text = 'あいうえお<strong>かきくけこ</strong>';
$text = strip_tags($text);
echo $text;

// array_push
$cities = array('tokyo','osaka','nagoya');
array_push ($cities,'yokohama','kyoto');
echo $cities[4];

// array_merge
$kanto = array('tokyo','kanagawa','saitama');
$toukai = array('aichi','gifu','mie');
$kansai = array('osaka','hyougo','kyoto');
$prefectures = array_merge($kanto,$toukai,$kansai);
foreach($prefectures as $value) {
   echo $value;
   echo '<br>';
}

// time
echo time();
echo '<br>';

// mktime
$timestamp = mktime(18,45,8,5,3,2020);
echo $timestamp;
echo '<br>';

// date
echo date('Y/m/d');
?>