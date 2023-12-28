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

    $sql = "INSERT INTO user (id, email, password, role) VALUES (NULL, :email, :password, :role)";

    $email = "test@gmail.com";
    $password = "1234";
    $role = "user";

    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':role', $role);

    // Thực thi câu lệnh SQL
    $stmt->execute();

    echo "Record created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
