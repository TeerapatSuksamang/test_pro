<?php
// ตั้งค่า Timezone
date_default_timezone_set("Asia/Bangkok");

// ส่งเวลาปัจจุบันในรูปแบบ JSON
echo json_encode([
    'time' => date("H/i/s"), // รูปแบบเวลา: ชั่วโมง:นาที:วินาที
    'date' => date("Y-m-d")  // รูปแบบวันที่: ปี-เดือน-วัน
]);
?>
