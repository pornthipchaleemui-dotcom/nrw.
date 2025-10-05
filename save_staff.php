<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nrw";

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// รับค่าจากฟอร์ม
$nameid = $_POST['nameid'];
$email = $_POST['email'];
$name = $_POST['name'];
$allergy = $_POST['allergy'];
$allergy_detail = $_POST['allergy_detail'];
$medicine_name = $_POST['medicine_name'];
//ส่วนของเวลาที่จะดูว่าใครส่งมา เก็บเวลาปัจจุบัน
$created_at = date("Y-m-d H:i:s");

// คำสั่งเพิ่มข้อมูล
$sql = "INSERT INTO staff (nameid, email, name, allergy, allergy_detail, medicine_name, created_at)
        VALUES ('$nameid', '$email', '$name', '$allergy', '$allergy_detail', '$medicine_name', '$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว!";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}

$conn->close();
?>
