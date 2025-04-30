<?php
$conn = new mysqli('localhost', 'root', 'admin123', 'student_db', 3307);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$id = $_POST['student_id'] ?? '';
$name = $_POST['student_name'] ?? '';
$mobile = $_POST['mobile_no'] ?? '';
$course = $_POST['course'] ?? '';
$uni = $_POST['university'] ?? '';

$sql = "INSERT INTO students (student_id, student_name, mobile_no, course, university) 
        VALUES ('$id', '$name', '$mobile', '$course', '$uni')";

echo $conn->query($sql) ? "<h2 text-align:center;'>CREATED</h2>" : "<h2 text-align:center;'>FAILED</h2>";

$conn->close();
?>
