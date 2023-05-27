<?php
for ($i=1; $i <= 10; $i++) { 
    
    if ($i == 10) {
        echo $i;
        break;
    }

    echo $i.'-';
}
echo '<br>';

$numbers = [ 1 , 1 ,  1 , 2 , 2, 3 ,6 , 7 , 7 ,4 ,5,5 ];

function function_3($names,$name){
    foreach ($names as $value) {
        if ($value==$name) {
            return 1;
        }
    }
    return 0;
    }
 function num1bers($numbers){
    $arr=[];
    for ($i=0; $i < count($numbers); $i++) { 
    if (function_3($arr,$numbers[$i])==0) {
        $arr[]=$numbers[$i];
    }
    }
    sort($arr);
    print_r($arr);
    
 }

 num1bers($numbers);
echo '<br>';
echo '<br>';

$str='eraasoft';
$charact='r';

for ($i=0; $i < strlen($str); $i++) { 
    if ($str[$i]==$charact) {
        $i++;
    }
    @$str0.=$str[$i];
}
echo $str0;
echo '<br>';
echo '<br>';

for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz ";
  } elseif ($i % 3 == 0) {
    echo "Fizz ";
  } elseif ($i % 5 == 0) {
    echo "Buzz ";
  } else {
    echo $i . " ";
  }
#echo '<br>';
}

echo '<br>';
echo '<br>';

$total = 0;
for ($i = 0; $i <= 30; $i++) {
  $total += $i;
}
echo ' The sum of the numbers 0 to 30 is '. $total;
echo '<br>';
echo '<br>';
$numbers = [ 5 , 15 , -10 , 100 , 250 , 0 , 1   ];
function LargestNumber($numbers){
$A=0;
for ($i=0; $i < count($numbers); $i++) { 
    if($numbers[$i]>$A){
        $A=$numbers[$i];
    }
}
echo $A;
}
LargestNumber($numbers);
echo '<br>';
echo '<br>';

function  SmallestNumber($numbers){
    $a=1000000;
    for ($i=0; $i < count($numbers); $i++) { 
        if($numbers[$i]<$a){
            $a=$numbers[$i];
        }
    }
    echo $a;
}
    SmallestNumber($numbers);

    echo '<br>';
    function factorial(){   
        $factorial=1;
        for ($i=4; $i > 0; $i--) { 
            $factorial *= $i;
        }
        echo $factorial ;
    }
    factorial();
    echo '<br>';
    echo '<br>';
    
for ($i=0; $i <= 15; $i++) { 
    if ($i%2!=0) {
        echo $i;
    }
}
echo '<br>';
for ($i=1; $i <= 15; $i++) { 
    if ($i%2==0) {
        echo $i;
    }
}
echo '<br>';
$person = array("name" => "John", "age" => 30, "city" => "New York");
foreach ($person as $key => $value) {
    echo "$key => $value",'<br>';
}
echo '<br>';
echo '<br>';
$values=0;
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
foreach ($sales as $value) {
    $values+=$value;   
}
echo $values;
echo '<br>';
for ($i=1; $i < 10; $i++) { 
    echo $i*8,'<br>';
}
echo '<br>';
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);

foreach ($students as $array) {
    echo '<br>';
    foreach ($array as $key => $value) {
        echo "$key => $value",'<br>';   
    }
}
$a=0;
do {
    $a++;
     $r=$a/3;
    if (is_int($r)) {
        echo $a,'<br>';
    }
} while ($a <= 100);