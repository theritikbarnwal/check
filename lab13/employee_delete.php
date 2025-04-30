<?php
$conn = new mysqli('localhost', 'root', 'admin123', 'emp_db',3307);
if(!$conn) die("ERROR");
$eId = $_POST['eId'];
$sql = "DELETE FROM empinfo WHERE eId = '$eId'";
echo $conn->query($sql) ? "<h1><center>DELETED</center></>" : "";
$conn->close();
?>