<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (fullname, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Quay lại trang chủ
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>