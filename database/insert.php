<style>
table, th, td {
    border: 1px solid black;
}
table{
    margin-left:300px;
}
</style>


<?php
// -----------------------------------------------Draw The table-----------------------------------
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *
from names
INNER JOIN author ON author.ID = names.author
INNER JOIN publishercompany ON publishercompany.id = names.PublishingHouse
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Author</th><th>Category</th><th>Price</th><th>Publishing House</th><th>Date Of Publish</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["namesID"]. "</td><td>" . $row["BooksNames"]. " " . "</td><td>". $row["AuthorName"]. " " . "</td><td>" . $row["Category"]. " " . "</td><td>" . $row["Price"]. " " . "</td><td>". $row["PublishingHouse"]. " " . "</td><td>" . $row["DateOfPublish"]. " " . "</td><td>"."</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);

include 'footer.php';





// ---------------------------------insert record---------------------------------
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "bookstore";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO names (BooksNames, Author, Category, Price, PublishingHouse)
// VALUES ('Origin3', '1', 'Crime and History','12','1')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();





?>