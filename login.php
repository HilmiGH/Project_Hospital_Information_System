<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="login_background">
        <div class="login_middle_container">
            <button class="login_close_button_base" onclick="">
                <img class="login_close_button" src="images/login_close_button.png" alt="close button">
            </button>
            <div class="login_title">
                Login/Register
            </div>
            <div class="login_sub_title_1">
                Selamat datang!
            </div>
            <div class="login_sub_title_2">
                Silahkan masukkan nomor telpon Anda
            </div>
            <div class="login_form_title">
                Nomor Telepon
            </div>
            <div class="login_input_and_button">
                <form  action="login.php" class="login_phone_input_base" method="post">
                    <input type="text" name="num" class="login_phone_input" id="login_phone_input" placeholder="+62">
                    
                <a href="login_otp.php" class="login_button_clickable">
                    <button class="login_button" name="login" type="button" onclick="">
                        <span>LANJUTKAN</span>
                    </button>
                </a>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>