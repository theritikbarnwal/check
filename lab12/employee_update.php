<?php
$conn = new mysqli('localhost', 'root', 'admin123', 'emp_db',3307);
if (!$conn) die("Connection failed: ");
$eId = $_POST['eId'];
$eName = $_POST['eName'];  
$eDes = $_POST['eDes'];
$eSal = $_POST['eSal'];

$sql = "UPDATE empInfo SET eName='$eName', eDes='$eDes', eSal='$eSal' WHERE eId='$eId'";
echo $conn->query($sql) ? "Record updated successfully" : "Error updating record: ";
$conn->close();    
?>
