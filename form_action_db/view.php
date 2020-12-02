<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$database = "bookdb"; 

$conn = mysqli_connect($servername, $username, $password,$database);


if (!$conn)
   	die("Connection failed: " . mysqli_connect_error());
echo 
	"Connected successfully";
echo "HI";
echo "<br><br>";
if(isset($_GET['view']))
{
	$name = $_GET["c"];

	//$sql = "INSERT INTO info (Name, SRN, SEM) VALUES ($name,$srn,$sem)";
	$sql = "SELECT * FROM books where code = '$name'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "title: " . $row["title"]. " <br> code: " . $row["code"]. " <br> author" . $row["author"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	
}
mysqli_close($conn);
?>


