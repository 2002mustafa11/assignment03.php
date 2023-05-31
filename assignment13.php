<?php

function  average($arr)
{
//echo array_sum($arr)/count($arr);
$r=0;
$i=0;
foreach ($arr as $value) {
    $r+=$value;
    $i++;
}
echo $r/$i;
}
average([1,2,3,4]);
echo '<br>';

function numbers(){
$numbers=[0,1,2,3,4,5,6,7,8,9];
//$ar2d=array_chunk($numbers,5);
for ($i = 0; $i < 2; $i++) {
    $row = [];
    for ($j = 0; $j < 5; $j++) {
        $row[] = $numbers[$i * 5 + $j];
    }
    $ar2d[] = $row;
}
echo '<pre>';
print_r($ar2d);
echo '</pre>';
}
numbers();
echo '<br>';

function LarSmo(){
$array = [1,10,5,2,11];
echo 'Largest number is:' ,$array[count($array)-1],'<br>';
echo 'Smallest number is:', $array[0],'<br>';
}
LarSmo();
echo '<br>';

echo '<br>';

function function_1($x,$numbers) {
$A=0;$a=0;
for ($i=0; $i < count($numbers); $i++) { 
    if ($numbers[$i]>$x) {
        $A++;
    }elseif($numbers[$i]<$x){$a++;}
}
echo "Numbers Greater then($x) ".$A.'<br>';
echo "Numbers Smaller than($x) ".$a;
}
$numbers=[0,1,2,3,4,5,6,7,8,9];
$x=3;
function_1($x,$numbers);
echo '<br>';
echo '<br>';

function function_2(){
$Array_of_names=["eraasoft ", "backend ", "group313 "];
foreach ($Array_of_names as $value) {
    $Array_names[]= ucfirst($value);
}
return($Array_names);
}
print_r(function_2());

echo '<br>';
echo '<br>';


$nums = [0,1,0,3,12];
function function_5($nums){

foreach ($nums as $value) {
    if ($value!=0) {
        $nums0[]=$value;
    }
}
foreach ($nums as $value) {
    if ($value==0) {
        $nums0[]=$value;
    }
}
$nums=$nums0;
print_r($nums);
}
function_5($nums);
echo '<br>';

$names = ["Alice", "Bob", "Charlie", "Dave"];
$name="Bob";

function function_3($names,$name){
foreach ($names as $value) {
    if ($value==$name) {
        return 1;
    }
}
return -1;
}

echo function_3($names,$name);
echo '<br>';

echo function_3(["Alice", "Charlie", "Dave"],$name);
echo '<br>';
echo '<br>';
function function_4(){
$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$A=0;
$a=0;
for ($i=0; $i < count($numbers); $i++) { 
    if($numbers[$i]>$A){
        $A=$numbers[$i];
    }
}
for ($i=0; $i < count($numbers); $i++) { 
if($numbers[$i]>$a &&$numbers[$i] != $A){
    $a=$numbers[$i];
}
}
echo $a;

}
function_4();
echo '<br>';

function even_oddno($n){
    if (is_int($n)) {

         if($n%2==0){
          return 'even';
         }else{
          return 'odd ';
         } 

    }
    }

    function PrimeNumber($n)
    {
    for($a=2; $a < $n; $a++)
    {
    if($n % $a == 0)
    {
    return 0;
    }
    }
    return 1;
    }
    
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140]; $x = 545;

/*
function function_6($numbers,$x){
$array=[];
if ($x>=1) {
    $array[]='Positive ';
}elseif($x<0){
    $array[]='Negative ';
}


$array[] = (function_3($numbers,$x)==1) ? 'Found' : 'not Found' ;

$array[]=strlen($x);

#Is-Prime or not===========
$array[] = (PrimeNumber($x)==0) ? "not Prime" : "Prime" ;
  

$array[]=even_oddno($x);



if (strrev($x)==$x) {
    $array[]='read from the right as the left';
}else {
    $array[]='not read from the right as the left';
}
//print_r($array);

echo implode(',',$array);
}*/
function function_6($numbers,$x){
$array=[];
//$array[] = (function_3($numbers,$x)==1) ? 'Found' : 'not Found' ;
if (function_3($numbers,$x)==1) {
    
    $array[]= ' Found';
    
if ($x>=1) {
    $array[]='Positive ';
}elseif($x<0){
    $array[]='Negative ';
}




$array[]=strlen($x);

#Is-Prime or not===========
$array[] = (PrimeNumber($x)==0) ? "not Prime" : "Prime" ;
  

$array[]=even_oddno($x);



if (strrev($x)==$x) {
    $array[]='read from the right as the left';
}else {
    $array[]='not read from the right as the left';
}
//print_r($array);

echo implode(',',$array);
}
else {$array[]=  'not Found';}
}
function_6($numbers,$x);
echo '<br>';
echo '<br>';
$a=1000;
function_6($numbers,$a);
