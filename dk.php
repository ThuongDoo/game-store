<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ASM";

echo "haha";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $masv = $_POST["ms"];
// $name = $_POST["ht"];
// $email = $_POST["email"];
// $gioitinh = $_POST["gioitinh"];
// $sothich = implode(", ", $_POST["sothich"]);
// $quoctich = $_POST["quoctich"];
// $ghichu = $_POST["ghichu"];

// $sql = "INSERT INTO users (masv, name, email, gioitinh, sothich, quoctich, ghichu)
//         VALUES ('$masv', '$name', '$email', '$gioitinh', '$sothich', '$quoctich', '$ghichu')";

// if ($conn->query($sql) === TRUE) {
//   echo "Đăng ký thành công!";
// } else {
//   echo "Lỗi: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
