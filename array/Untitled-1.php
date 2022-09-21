<?php
// indexed array
$colors = array("Red", "Green", "Blue");

echo $colors[0]."<br>"; 
echo $colors[1] ."<br>"; 
echo $colors[2] ."<br>"; 


echo "<br>";
echo "<br>";
echo "<br>";

// associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

echo $ages["Peter"] ."<br>";
echo $ages["Clark"] ."<br>";
echo $ages["John"] ."<br>";


echo "<br>";
echo "<br>";
echo "<br>";



//  multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
        "passward" => "ihimlmof",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "passward" => "bojpj",

    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
        "passward" => "rfnriojgp165",
    )
);
// Access nested value
echo "Harry Potter's Email-id is: " . $contacts[2]["email"];

echo "<br>";
echo "<br>";
echo "<br>";

for ($i=0; $i<count($contacts); $i++){
    if ($contacts[$i]["name"]=="Clark Kent"){
        echo "the email address is : ". $contacts[$i]["email"]."<br>";
        echo "and the Passward is : ". $contacts[$i]["passward"];
    }
}


echo "<br>";
echo "<br>";
echo "<br>";




$products= array(
    array(
        "productName"=>"black dress",
        "Price"=>"70 JOD",
        "sizes"=>"S, M, L",
    ),
    array(
        "productName"=>"jumpsuit",
        "Price"=>"110 JOD",
        "sizes"=>"S, M, L, XL",
    ),
    array(
        "productName"=>"Blue Maxi Dress",
        "Price"=>"250 JOD",
        "sizes"=>"S, M, L",
    )

    );
    echo "Our Products are:"."<br>";
for ($i=0; $i<count($products); $i++){
    
    echo $products[$i]["productName"]."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo `<table border ="1" style='border-collapse:collapse '  >`;

echo "<th>"; echo "product Name"."&nbsp"."&nbsp"."&nbsp"."&nbsp";echo "</th>";
echo "<th>";echo "Price"."&nbsp"."&nbsp"."&nbsp"."&nbsp";echo "</th>";
echo "<th>";echo "sizes"."&nbsp"."&nbsp"."&nbsp"."&nbsp";echo "</th>";


for ($i=0; $i<3; $i++){
    echo "<tr>";
    
    echo "<td>"; echo $products[$i]["productName"]; echo "</td>";
    echo "<td>"; echo $products[$i]["Price"]; echo "</td>";
    echo "<td>";echo $products[$i]["sizes"]; echo "</td>";
   
    echo "</tr>";
}


?>
