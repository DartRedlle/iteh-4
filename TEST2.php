<?php

print_r("Тест 1:");
error_reporting(E_ERROR);
$arr1 = array(1,2,4,3,4,5,5);
$arr2=array(4,45,3,54);

$result = array_unique($arr1);
print_r($result);

print_r("<br/>Тест 2:");
print_r(array_count_values($arr1));

print_r("<br/>Тест 3:");
$merge=array_merge($arr1,$arr2);
$res=array_unique($merge);
print_r($res);

print_r("<br/>Тест 4:");
$arr=$arr1;
$reversed=[];
for($i=count($arr)-1; $i>=0; $i--){
    if ($i > count($arr)-1) {
        break;
    }
    $reversed[]=$arr[$i];
}
print_r($reversed);