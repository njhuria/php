<?php
    $a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
   // print_r($v);
}
$b = array(1,2,34,54);
$key = 0;
foreach ($b as $c){
    //echo "current value is : $c";
    echo "\[$key] => $c.\n";
    $key++;
}
  $p = array("one"=>1,
             "two"=>3,
              "three"=>7,
               "for"=>13);
  
  foreach($p as $key=>$val2){
      echo "key & val is : $key=>$val2";
  }
  
  $x = array();
  $x[0][0] = "A";
  $x[0][1] = "B";
  $x[1][0] = "C";
  $x[1][1] = "D";
  
foreach($x as $k){
    foreach($k as $p){
        echo "$p";
    }
}

foreach(array(1,2,3,4,5) as $x){
    echo"$x";
}
    

$array = [[2,3],
          [4,5]];
      foreach ($array as list($a,$b)){
          echo "A :$a; B :$b";
      }

?>

