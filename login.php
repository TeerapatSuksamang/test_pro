<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="bootstrap-5.3.3/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body class="login-bg">
    <img src="img/logo.png" alt="" class="login-bg-img">
    <div class="overlay-1"></div>

    <a href="index.php" class="position-absolute ms-4 mt-4 text-light">
        <i class="fa-solid fa-arrow-left btn-icon"></i>
    </a>

    <div class="container pt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6  pt-5">
                <div class="text-center text-light">
                    <h1>ลงชื่อเข้าใช้</h1>
                    <h3>ระบบเลือกตั้งประธานแผนก IT</h3>
                </div>

                <center>
                    <form action="system/std_login.php" method="post" class="form-login w-75">
                        <div class="form-floating mb-3">
                            <input type="text" inputmode="numeric" class="form-control" placeholder="" id="std_code" name="std_code">
                            <label for="std_code">รหัสนักศึกษา</label>
                        </div>

                        <div class="form-floating mb-5">
                            <input type="password" inputmode="numeric"  class="form-control" placeholder="" id="id_card" name="id_card">
                            <label for="std_code">รหัสบัตรประชาชน</label>
                            <span id="togglePassword" class="eye-icon">
                                <i class="fa-regular fa-eye-slash"></i>
                            </span>
                        </div>

                        <button type="submit" name="submit" class="btn-submit">ลงชื่อเข้าใช้</button>
                        
                    </form>
                </center>
            </div>
        </div>
    </div>

    <script src="function.js"></script>
</body>
</html>