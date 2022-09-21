
<?php
// ---------------Question#1------------
$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";




// ---------------Question#2------------
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";





// ---------------Question#3------------
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}





// ---------------Question#4------------
echo "<br>";
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."<br>";
echo "<br>";


// ---------------Question#5------------
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "<br>";
echo "<br>";



// ---------------Question#6------------
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}
echo "<br>";





// ---------------Question#7------------
echo "<br>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>"; 


sort($temp_array);

echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].",";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo $temp_array[$i].",";
}
echo "<br>";




// ---------------Question#8------------
echo "<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";



// ---------------Question#9&10------------
echo "<br>";
$Color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
echo "values are in lowercase:";
echo '
';
foreach ($Color as $category => $value) {
echo "$category=>".strtolower($value);
echo '
';
}
echo "<br>";
echo "values are in uppercase:";
echo '
';
foreach ($Color as $category => $value) {
echo "$category=>".strtoupper($value);
echo '
';
}




// ---------------Question#11------------
echo "<br>";
echo "<br>";
echo implode(",",range(200,250,4))."\n";
echo "<br>";







// ---------------Question#12------------
echo "<br>";
echo "<br>";
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';

$longest= strlen($my_array[0]);

foreach($my_array as $index){
    $index_len = strlen($index);
    if ($index_len >= $longest){
        $longest = $index_len; 
    }
  
}
echo $longest;



echo "<br>";
echo "<br>";

$longest2= strlen($my_array[0]);
$longest_index = $my_array[0];
$arraylen = count($my_array);
for($i= 0; $i<$arraylen; $i++ ){
    $index_len = strlen($my_array[$i]);
    if (strlen($my_array[$i]) >= $longest2){
        $longest2 = strlen($my_array[$i]);
        $longest_index = $my_array[$i];
    }
  
}
echo "<br>";
echo $longest_index;





// ---------------Question#13------------
echo "<br>";
echo "<br>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}



// ---------------Question#14------------
echo "<br>";
echo "<br>";
 $array14 = array( 2, 0, 10, 12, 6) ;
 asort($array14);
 if ($array14[0]!=0){
    echo $array14[0];
 }
 else{
    echo $array14[1];
 }



















 // ---------------Task 2 Question#1------------
 echo "<br>";
echo "<br>";

 for( $i=1; $i<=10; $i++ )
{
echo $i;
if ($i<10){
echo "-";
}
}



 // ---------------Task 2 Question#2------------
 echo "<br>";
echo "<br>";
$summation=0;
 for( $i=1; $i<=30; $i++ )
{
echo $i;
$summation+=$i;
if ($i<30){
echo "-";
}
}
echo "<br>"."the total is: ".$summation;




 // ---------------Task 2 Question#3------------
 echo "<br>";
 echo "<br>";
 
function print_pattern($num){
    for ($i=0; $i<$num; $i++){
        for ($k=$num; $k> $i+1; $k--){
          echo "A"."\n";
        }
        $array3=["A","B","C","D","E"];
        for ($j=0; $j<=$i; $j++){
            echo $array3[$i]."\n";
          }
          echo "<br>";
    }
}
$num =5;
print_pattern($num);




 // ---------------Task 2 Question#4------------
 echo "<br>";
 echo "<br>";
 
function print_pattern_num($num){
    for ($i=0; $i<$num; $i++){
        for ($k=$num; $k> $i+1; $k--){
          echo "1"."\n";
        }
        $array3=[1,2,3,4,5];
        for ($j=0; $j<=$i; $j++){
            echo $array3[$i]."\n";
          }
          echo "<br>";
    }
}
$num =5;
print_pattern_num($num);




 // ---------------Task 2 Question#5------------
 echo "<br>";
 echo "<br>";
 $n = 1; /*Initializing starting number*/
 for ($i = 0; $i < 5; $i++)
 {
     for ($j = 0; $j <5; $j++ )
     {
        if ($j<$i || $j>$i){
            echo "0 ";
        }
        else{
         echo $n." ";
        }
       
     }
     $n = $n + 1;
     echo "<br/>";
 }
 
 
 // ---------------Task 2 Question#6------------
 echo "<br>";
 echo "<br>";

 $num = 5;  

function fact($num){ 
    $factorial = 1;
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  
}
fact($num);


// ---------------Task 2 Question#7------------
echo "<br>";
echo "<br>";

function fib($n) { 
    $array7= [0,1];
    echo $array7[0]." , ".$array7[1];
    for($i=2; $i<=$n; $i++){
        $array7[$i]=$array7[$i-1]+$array7[$i-2];
        if ($array7[$i]<=$n){
        echo $array7[$i]." , ";
    }}
    }
    fib(21);
  





 // ---------------Task 2 Question#8------------
 echo "<br>";
 echo "<br>";

$text="Orange Coding Academy";
$lowerText= strtolower($text);
echo substr_count($lowerText, 'c');




 // ---------------Task 2 Question#9------------
 echo "<br>";
 echo "<br>";

for($i=1; $i<=6; $i++){
    echo"<table>";
    echo"<tr>";
    for($j=1; $j<=5; $j++){
        "<td>";
        $multiply = $j*$i;
        echo $i. " * ".$j. " = ".$multiply."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
        "</td>";
    }
    "</tr>";
     
    "</table>";
}











// ---------------Task 2 Question#10------------
echo "<br>";
echo "<br>";


 for ($i = 1; $i <= 10; $i++){
    if($i / 3 == round($i / 3) && $i / 5 == round($i / 5)){
       echo " FizzBuzz  ";
    }
    else if($i / 3 == round($i / 3)){
       echo  " Fizz  ";
    }
    else if($i / 5 == round($i / 5)){
       echo "  Buzz ";
    }
    else {
       echo $i."  ";
    }
 }
 
 

 // ---------------Task 2 Question#11------------
 echo "<br>";
 echo "<br>";

 $n = 1; /*Initializing starting number*/
 for ($i = 0; $i < 5; $i++)
 {
     for ($j = 0; $j <= $i; $j++ )
     {
         echo $n." ";
         $n = $n + 1;
     }
     echo "<br/>";
 }

 


// ---------------Task 2 Question#11------------
echo "<br>";
echo "<br>";


 function print_pattern3($num)
{
// Outer loop handles number of rows
for ($i = 1; $i <= $num; $i++)
{
// inner loop handles indentation
for($k = $num; $k > $i; $k-- )
{
// Print spaces
echo "&nbsp"."&nbsp"."&nbsp";
}
// inner loop handles number of stars
for($j = 1; $j <= $i; $j++ )
{
// Print characters
echo chr(64+$j)."  ";
}
for($j = $i-1; $j >= 1; $j-- )
{
// Print characters
echo chr(64+$j)." ";
}
// go to new line after each row pattern is printed
echo "<br>";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern3($num);





