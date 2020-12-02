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

if(isset($_GET['add']))
{
	$name = $_GET["name"];
	$c = $_GET["c"];
	$a = $_GET["a"];


	//$sql = "INSERT INTO info (Name, SRN, SEM) VALUES ($name,$srn,$sem)";
	$sql = "INSERT INTO books (title, code, author) VALUES ('$name', '$c', '$a')";

	if (mysqli_query($conn, $sql))  
		header("Location:file.html");
	else
	   	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	
}
echo "NOt";
mysqli_close($conn);
?>

