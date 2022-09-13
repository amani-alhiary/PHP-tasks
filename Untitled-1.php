<?php
// Question #1

echo strtoupper("Hello WORLD!")."<br>";
echo strtolower("Hello WORLD.")."<br>";
echo lcfirst("Hello world!")."<br>";
echo ucwords("hello world")."<br>";


// Question #2
// *************************************************
$input = ' 15:00:02';
$date = strtotime($input);
echo date(' h:i:s', $date)."<br>";



// Question #3

$word = "orange";
$mystring = "I'm a full stack deleloper at orange coding academy";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!"."<br>";
} else{
    echo "Word Not Found!"."<br>";
}



// Question#4
// url to inspect
$url = 'http://www.example.com/image.jpg?q=6574&t=987';

// parsed path
$path = parse_url($url, PHP_URL_PATH);

// extracted basename
echo basename($path)."<br>";


// Question#5
$string = "user@domain.com";

$explode = explode("@",$string);

array_pop($explode);

$newstring = join('@', $explode);

echo $newstring."<br>";



// Question#6
$str = 'amanyheary@gmail.com';
echo substr( $str, -3 ) ."<br>";




//   Question#7
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, count($alphabet)-1);
        $pass[$i] = $alphabet[$n];
    }
    echo $pass."<br>";
}






//   Question#8

$str = "That new trainee is so genius";
 
// Word to be replaced
$w1 = "That";
 
//  Replaced by
$w2 = "Our";
   
// Using str_replace() function
// to replace the word
$str = str_replace($w1, $w2, $str);
 
// Printing the result
echo $str."<br>";





//   Question#9

$string1 = 'Dragonball';
$string2 = 'Dragonboll';

$array1 = str_split($string1);
$array2 = str_split($string2);

$result = array_diff_assoc($array1, $array2);


$first_diff = key($result);


echo "The first difference between the strings is at position " . $first_diff . " '$string1[$first_diff]' vs '$string2[$first_diff]'."."<br>";





//   Question#10


$c = array("Twinkle, twinkle little star");
echo var_dump($c) . "<br>";




//   Question#11
$str = 'a';
echo ++$str."<br>"; // prints 'b'

$str = 'z';
echo ++$str."<br>"; // prints 'aa' 



//   Question#12


$string = 'The brown fox.';
$replacement = 'quick ';

echo substr_replace($string, $replacement, 2, 0)."<br>"; 



//   Question#13
// str-replace
$string13 = 05405816.0269;
if (ltrim($string13, '0') != '') {
    $string13 = ltrim($string13, '0');
} else {
    $string13 = '0';
}
echo $string13."<br>";






// Question#14
$str14 = "The quick brown fox jumos over the lazy dog";
echo str_replace("fox","",$str14)."<br>"; 






// Question#15
$str15 = "hello everybody ---";
echo preg_replace("![^a-z0-9]+!i", "-", $str15)."<br>";



// Question#16
function RemoveSpecialChar($str) {
 
    // Using str_replace() function
    // to replace the word
    $res = str_replace( array( '\'', '"',
    ',' , ';', '<', '>' ), ' ', $str);

    // Returning the result
    return $res;
    }

// Given string
$str = "Example,to remove<the>Special'Char;";

// Function calling
$str1 = RemoveSpecialChar($str);

// Printing the result
echo $str1."<br>";



// Question#17
$inputstring= "Hello my name is Amani Alhiary and this is my work";
$pieces = explode(" ", $inputstring);
$first_part = implode(" ", array_splice($pieces, 0, 5));


echo $first_part."<br>";


// Question#18
$name="'John,''Smith'";
$result = str_replace("'", '', $name);
echo "The actual value is=",$name,"<br>";
echo "After removing the comma(,)=",$result,"<br>";


// Question#19
foreach (range('A', 'Z') as $char) {
    echo $char . "\n";
}


?>