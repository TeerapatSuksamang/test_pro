<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* *{
            border: .5px solid red;
        } */
    </style>

</head>
<body class="home-bg">
    <?php
        include_once 'system/db.php';
        $select = mysqli_query($conn, "SELECT * FROM `admin` ORDER BY `admin_id` ASC LIMIT 1  ");
        $row = mysqli_fetch_array($select);
    ?>

    <div class="container p-4 pt-2" style="height: 100svh !important; min-height: 100svh !important; max-height: 100svh !important;">
        <div class="candidate-content" >
            <div>
                <!-- <a href="" class="button px-4" disabled>ยังไม่เปิดให้ลงคะแนน</a> -->
                <a href="vote.php" class="button px-4 " id="vote_btn_status" >ลงคะแนนเสียง</a>
                <a href="profile.php" class="button"><i class="fa-regular fa-user"></i></a>
            </div>
            <!-- <p class="mt-1 text-light text-center m-0" style="font-size: .8rem;">อันดับที่ 1 ปัจจุบัน เบอร์ 9 คะแนน 256</p> -->
            <p class="mt-1 text-light text-center m-0" style="font-size: .8rem;">
                จะเปิดให้ลงคะแนนวันที่ <span class="date"></span><br> 
                เวลา <span class="time_start"></span> ถึง <span class="time_end"></span>
                <!-- <div id="status">กำลังโหลด...</div> -->
            </p>

            <div class="candidate" >
                <div class="number">
                    <h1>เบอร์ 1</h1>
                    <h1>เบอร์ 1</h1>
                    <h1>เบอร์ 1</h1>
                </div>
                <div class="img-box" style="margin: 0 !important;">
                    <!-- <img src="img/pmint.png" alt=""> -->
                    <!-- <img src="img/pfiew.png" alt=""> -->
                    <!-- <img src="img/pfresh.png" alt=""> -->
                    <!-- <img src="img/fam.png" alt=""> -->
                    <div class="description">
                        <h3 class="text-light text-center">ขอโอกาศ น้อมอาศา พัฒณาวิทยาลัย 9 ไปด้วยใจ 9 ไปด้วยกัน</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overlay"></div>
    
    <div class="score-details text-white" id="scoreDetails">
        <div class="handle p-3" >
            <h4>ลำดับคะแนน <span class="float-end arrow"><i class="fa-solid fa-chevron-up"></i></span></h4>
        </div>
        
        <div class="scroll">
            <ul class="list-group ">

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/fam.png" alt="" class="img">
                        </span> 
                        นายอิทธพล ออมสิน
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/pmint.png" alt="" class="img">
                        </span> 
                        นางสาวกัญญา พานทอง
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/pfiew.png" alt="" class="img">
                        </span> 
                        นายธีรยุทธ ปาแก้ว
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/pfresh.png" alt="" class="img">
                        </span> 
                        นายวัชรพล พึ่งฤทธิ์
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/bg.png" alt="" class="img">
                        </span> 
                        นายธีรภัทร สุขสำอางค์
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 
                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/pfresh.png" alt="" class="img">
                        </span> 
                        teerapat
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/bg.png" alt="" class="img">
                        </span> 
                        teerapat
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 
                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/pfresh.png" alt="" class="img">
                        </span> 
                        teerapat
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 

                <li class="list-group-item d-flex justify-content-between" >
                    <span class="d-flex gap-1 align-items-center">
                        <span class="candidate-profile" >
                            <img src="img/bg.png" alt="" class="img">
                        </span> 
                        teerapat
                    </span>
                    <span class="d-flex align-items-center">256 คะแนน</span>
                </li> 
                
            </ul>
        </div>
    </div>

    <script src="function.js"></script>
    
</body>
</html>