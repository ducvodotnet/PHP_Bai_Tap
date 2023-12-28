<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
// Tạo kết nối
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO user (id, email, password, role) VALUES (NULL, :id, :email, :role)";
?>