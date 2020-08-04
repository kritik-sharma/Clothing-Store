<?php
$db_server   = "localhost";
$db = "cloth_merchant";
$db_user = "cmuser";
$db_pass = "cmpass";
// Create connection
$conn = new mysqli($db_server, $db_user, $db_pass);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$query = "use $db";
mysqli_query($conn,$query);
?>