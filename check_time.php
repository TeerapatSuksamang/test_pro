<?php
// เชื่อมต่อกับฐานข้อมูล
include_once 'system/db.php';

date_default_timezone_set("Asia/Bangkok");

// ดึงข้อมูลเวลาจากฐานข้อมูล
$query = "SELECT * FROM `admin` WHERE `admin_id` = 1"; // หรือใช้ ID ตามที่ต้องการ
$result = mysqli_query($conn, $query);
$task = mysqli_fetch_array($result);

$time_start = strtotime($task['time_start']);
$time_end = strtotime($task['time_end']);
$current_time = time(); // เวลาปัจจุบัน

// เช็คสถานะ
if ($current_time < $time_start) {
    $status = "ยังไม่ถึงเวลา";
} elseif ($current_time >= $time_start && $current_time <= $time_end) {
    $status = "กำลังทำงาน";
} else {
    $status = "สิ้นสุด";
}

// ส่งผลลัพธ์กลับ
echo time();
?>
