const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("id_card");

if(togglePassword != null){
    togglePassword.addEventListener("click", function () {
        // Toggle the type of the input field
        const type = passwordInput.type === "password" ? "text" : "password";
        passwordInput.type = type;

        // Toggle the icon
        this.innerHTML = type === "password"
            ? '<i class="fa-regular fa-eye-slash"></i>'
            : '<i class="fa-regular fa-eye"></i>';
    });
}

function showpass() {
    document.querySelectorAll('#pass, #pass1, #pass2').forEach(pass => pass.type = pass.type === 'password' ? 'text' : 'password');
}

// slider toggle 
const scoreDetails = document.getElementById("scoreDetails");
const overlay = document.getElementById("overlay");
const handle = document.querySelector(".handle");
const arrow = document.querySelector(".arrow");
let isOpen = false;

// เมื่อกดแถบ Handle
handle.addEventListener("click", () => {
    toggleScoreDetails();
});

// เมื่อกดพื้นที่ด้านนอก (Overlay)
overlay.addEventListener("click", () => {
    if (isOpen) {
        toggleScoreDetails();
    }
});

// ฟังก์ชันเปิด/ปิดแถบ
function toggleScoreDetails() {
    if (isOpen) {
        scoreDetails.style.bottom = "-52vh"; // ซ่อนแถบ
        overlay.classList.remove("active"); // ซ่อน overlay ด้วยคลาส
        arrow.innerHTML = "<i class='fa-solid fa-chevron-up'></i>"; // แสดงลูกศรขึ้น
    } else {
        scoreDetails.style.bottom = "0"; // แสดงแถบ
        overlay.classList.add("active"); // แสดง overlay ด้วยคลาส
        arrow.innerHTML = "<i class='fa-solid fa-chevron-down'></i>"; // แสดงลูกศรลง
    }
    isOpen = !isOpen;
}


// --------------------------- Time function ---------------------------

// function checkTimeStatus() {
//     $.ajax({
//         url: 'check_time.php',  // URL ของ PHP script
//         method: 'GET',
//         success: function(response) {
//             $('#status').text(response); // อัปเดตข้อความใน div
//         }
//     });
// }

// // เรียกใช้ฟังก์ชัน `checkTimeStatus` ทุกๆ 1000 มิลลิวินาที (1 วินาที)
// setInterval(checkTimeStatus, 1000);

function updateTime() {
    $.ajax({
        url: "check_time.php", // ไฟล์ PHP สำหรับดึงเวลา
        method: "GET",
        dataType: "json", // รับข้อมูลแบบ JSON
        success: function(response) {
            // อัพเดทเวลาและวันที่บนหน้าเว็บ
            $(".date").text(response.date);
            $(".time_start").text(response.time_start);
            $(".time_end").text(response.time_end);
            $("#status").text(response.status);
            if(response.status == 'wait'){
                // console.log(response.status);
                $("#vote_btn_status").attr("href", "");
                $("#vote_btn_status").prop("disabled", true);
            }
        },
        error: function() {
            console.error("ไม่สามารถดึงข้อมูลเวลาได้");
        }
    });
}

// เรียกฟังก์ชัน updateTime ทุก ๆ 1 วินาที
setInterval(updateTime, 1000);
updateTime(); // เรียกครั้งแรกทันที