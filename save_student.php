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
$stu_id = $_POST['stu_id'];
$stu_name = $_POST['stu_name'];
$phone = $_POST['phone'];
$allergy = $_POST['allergy'];
$allergy_detail = $_POST['allergy_detail'];
$medicine_name = $_POST['medicine_name'];
$student_grade = $_POST['student_grade'];
//ส่วนของเวลาที่จะดูว่าใครส่งมา เก็บเวลาปัจจุบัน
$created_at = date("Y-m-d H:i:s");

// คำสั่งเพิ่มข้อมูล
$sql = "INSERT INTO students (stu_id, stu_name, phone, allergy, allergy_detail, medicine_name, student_grade, created_at)
        VALUES ('$stu_id', '$stu_name', '$phone', '$allergy', '$allergy_detail', '$medicine_name', '$student_grade','$created_at')";

if ($conn->query($sql) === TRUE) {
    echo "บันทึกข้อมูลเรียบร้อยแล้ว!";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}

$conn->close();
?>
