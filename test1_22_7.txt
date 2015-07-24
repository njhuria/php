<?php

function sortarray($x) {
    //$y=sort($x);
    array_key_exists($key, $array);
    return $y;
    
}

function mysum($a, $b) {
    return $a + $b;
}

$sum = mysum(10, 20);

echo "mysum=>" . $sum;

$states = array('Delaware', 'Pennsylvania', 'New Jersey');
print_r($states);
echo '</br>';
$t = array("key2"=>'Delaware', "key1"=>'Pennsylvania', "key3"=>'New Jersey');
print_r($t);
echo '</br>';
echo array_key_exists("key2",$t); 


echo '</br>';
ksort($t);
print_r($t);
echo count($t);

echo '</br>';
$arr = array("key2"=>'Delaware', "key1"=>'Pennsylvania', "key3"=> array("inerkey"=>"rtrtr" ,"key5"=>10));
print_r($arr);

echo count($arr)."-------".count($arr,1)


?>
