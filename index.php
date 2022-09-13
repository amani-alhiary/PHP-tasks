<?php


// Question#1
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

// Driver Code
$number = 32;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime"."<br>";
else
    echo "Not Prime"."<br>";






// Question#2
function Reverse($str){
      
    // strlen() used to calculate the length of the string
    $len = strlen($str);
  
    // Base case for recursion
    if($len == 1){
        return $str;
    }
    else{
        $len--;
        return Reverse(substr($str,1, $len)) 
                        . substr($str, 0, 1);
    }
}
  
// Driver Code
$str = "remove";
echo(Reverse($str)."<br>");






// Question#3
function lowerCase($string){
    if (ctype_lower($string)) {
        echo "Yes\n"."<br>";
    } else {
        echo "No\n"."<br>";
    }
}
$string = "Remove";
lowerCase($string);





// Question#4
function swap($A,$B){
    echo "y= ". $A."<br>";
    echo "x= ". $B."<br>";
    
}
$A= 5;
$B= 8;
 swap($A,$B);




// Question#6
$num=407;  

function armStrong($num){
$total=0;
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number"."<br>";  
}  
else  
{  
echo "No it is not an armstrong number"."<br>";  
}
}
armStrong($num);



// Question#7
function palindrome($input) {
    $middle = strlen($input) / 2;
    $firstHalf = substr($input, 0, floor($middle));
    $secondHalf = substr($input, ceil($middle));
    return $firstHalf == strrev($secondHalf);
}

echo palindrome("racecar") ? "Palindrome" : "Not a palindrome";



// Question#8
$list_programming_language = array('C#',  'C++', 'PHP', 'C#', 'PHP');
$result = array_unique($list_programming_language);
print_r($result);






// task 2 Question 1
function year_check($my_year){
    if ($my_year % 400 == 0)
       echo("<br>"."It is a leap year"."<br>");
    else if ($my_year % 100 == 0)
       echo("<br>"."It is not a leap year"."<br>");
    else if ($my_year % 4 == 0)
       echo("<br>"."It is a leap year"."<br>");
    else
       echo("<br>"."It is not a leap year"."<br>");
 }
 $my_year = 2023;
 year_check($my_year);



// task 2 Question 2
function season($tempreture){
    if($tempreture>= 20){
        echo "the season is summer"."<br>";
    }
    else{
        echo "the season is winter"."<br>";
    }
}
season(15);



// task 2 Question 3

$total =0;
function summation($A,$B){
    if ($A==$B){
        $total=6*$A;
        return $total;
    }
    else{
       $total= $A+$B;
       return $total;
    }
}
echo summation(2,2)."<br>";





// task 2 Question 4
function sum2($c,$d){
    $total= $c+$d;
    if ($total==30){
        echo "true"."<br>";
    }
    else{
        echo "false"."<br>";
    }

}
sum2(10,20);



// task 2 Question 5
function threediv($num){
    if ($num%3 ==0){
        echo "true"."<br>";
    }
    else{
        echo "false"."<br>";
    }
}
threediv(21);



// task 2 Question 6
function isNumber($number){
    if ($number >=20 and $number<=50){
        echo "true"."<br>";
    }
    else{
        echo "false"."<br>";
    }
}
isNumber(19);




// task 2 Question 7

function largestOne(){
    $array7= array(5,9,6);

    $largest= $array7[0];
    for ($i=0; $i<=2;  $i++){
        if ($array7[$i]>$largest){
            $largest=$array7[$i];
        }
    }
    echo $largest."<br>"; 
}
largestOne();






// task 2 Question 8
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}





// task 2 Question 9
function checkopration($A, $ope, $B)
{
    if ($ope== "+"){
        echo $A+$B."<br>";
    }
    if ($ope== "-"){
        echo $A-$B."<br>";
    }
    if ($ope== "*"){
        echo $A*$B."<br>";
    }
    if ($ope== "/"){
        echo $A/$B."<br>";
    }
}
checkopration(5, "+", 10);




// task 2 Question 10
function voting($age){
    if ($age>= 18){
        echo "he is alligable to vote"."<br>";
    }
    else{
        echo "he is not alligable to vote"."<br>";
    }
}
voting(15);





// task 2 Question 11
function status($number11){
    if ($number11<0){
        echo "negative"."<br>";
    }
    if ($number11>0){
        echo "Positive"."<br>";

    }
    if ($number11==0){
        echo "Zero"."<br>";
    }
}
status(-5);



// task 2 Question 12
$avg=0;
function average($array12){
    $summation= 0;
    for ($i=0; $i<=8;  $i++){
        $summation+= $array12[$i];
    } 
    $avg= $summation/9;
    
    if ($avg<= 60){
        echo "F"."<br>";
    }
    elseif ($avg<=70){
        echo "D"."<br>";
    }
    elseif ($avg<=80){
        echo "C"."<br>";
    }
    elseif ($avg<=90){
        echo "B"."<br>";
    }
    elseif ($avg<=100){
        echo "A"."<br>";
    }
}
$array12= array(60,86,95,63,55,74,79,62,50);
average($array12);


