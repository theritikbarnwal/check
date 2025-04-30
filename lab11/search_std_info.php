<?php
$conn = new mysqli("localhost", "root", "admin123", "student_db", 3307);
if ($conn->connect_error) die("Connection failed");

$student_id = $_POST['student_id'] ?? '';

if (!empty($student_id)) {
    $res = $conn->query("SELECT * FROM students WHERE student_id = '$student_id'");
    echo "<center><table border='1' cellpadding='10'>
            <tr><th>ID</th><th>Name</th><th>Mobile</th><th>Course</th><th>University</th></tr>";
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        echo "<tr>
                <td>{$row['student_id']}</td>
                <td>{$row['student_name']}</td>
                <td>{$row['mobile_no']}</td>
                <td>{$row['course']}</td>
                <td>{$row['university']}</td>
              </tr>";
    } else {
        echo "<tr><td colspan='5'>No record found</td></tr>";
    }
    echo "</table></center>";
}
$conn->close();
?>
