<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <style>
        /* *{
            border: .5px solid red;
        } */
    </style>
</head>
<body class="vote-bg" style="overflow: hidden;">

    <?php
        
        $page = 'ผลโหวตปัจจุบัน';
        include_once 'side_bar.php';
    ?>

    <div class="scroll" style="max-height: 88svh !important; padding-top: 1.6rem;">
        <div class="container">
            <div class="vote-result">
                <span class="vote-point" style="width: 90%;"></span>
                <span>
                    <span class="candidate-profile">
                        <img src="../img/pmint.png" alt="" class="img">
                    </span>
                    <span class="ms-2">นางสาวกัญญา พานทอง</span>
                </span>
                <span class="me-2">256 คะแนน</span>
            </div>

            <div class="vote-result">
                <span class="vote-point" style="width: 70%;"></span>
                <span>
                    <span class="candidate-profile">
                        <img src="../img/pfiew.png" alt="" class="img">
                    </span>
                    <span class="ms-2">นายธีรยุทธ ปาแก้ว</span>
                </span>
                <span class="me-2">256 คะแนน</span>
            </div>

            <div class="vote-result">
                <span class="vote-point" style="width: 50%;"></span>
                <span>
                    <span class="candidate-profile">
                        <img src="../img/pfresh.png" alt="" class="img">
                    </span>
                    <span class="ms-2">นายวัชรพล พึ่งฤทธิ์</span>
                </span>
                <span class="me-2">256 คะแนน</span>
            </div>

            <div class="vote-result">
                <span class="vote-point" style="width: 20%;"></span>
                <span>
                    <span class="candidate-profile">
                        <img src="../img/fam.png" alt="" class="img">
                    </span>
                    <span class="ms-2">นายอิทธพล ออมสิน</span>
                </span>
                <span class="me-2">256 คะแนน</span>
            </div>
            
            <div class="vote-result">
                <span class="vote-point" style="width: 15%;"></span>
                <span>
                    <span class="ms-2">ไม่ประสงค์ลงคะแนน</span>
                </span>
                <span class="me-2">10 คน</span>
            </div>
        </div>
    </div>

</body>
</html>