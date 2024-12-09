<?php
// เชื่อมต่อกับฐานข้อมูล
include_once 'system/db.php';

date_default_timezone_set("Asia/Bangkok");

// ดึงข้อมูลเวลาจากฐานข้อมูล
$select = mysqli_query($conn, "SELECT * FROM `admin` WHERE `admin_id` = 1");
$row = mysqli_fetch_array($select);

$date = $row['date'];
$time_start = $row['time_start'];
$time_end = $row['time_end'];
$current_time = date("H:i:s"); // เวลาปัจจุบัน

// เช็คสถานะ
if ($current_time < $time_start) {
    $status = "ยังไม่ถึงเวลา";
} elseif ($current_time >= $time_start && $current_time <= $time_end) {
    $status = "กำลังทำงาน";
} else {
    $status = "สิ้นสุด";
}

// ส่งผลลัพธ์กลับ
// echo $status;

if($current_time < $time_start){
    $status = "wait";
    echo json_encode([
        'date' => $date,
        'time_start' => $time_start, // รูปแบบเวลา: ชั่วโมง:นาที:วินาที
        'time_end' => $time_end,  // รูปแบบวันที่: ปี-เดือน-วัน
        'status' => $status  
    ]);
} elseif ($current_time >= $time_start && $current_time <= $time_end) {
    $status = "working";
} else {
    $status = "end";
}
?>
