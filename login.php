<?php require_once 'session.php';?>
<?php require_once 'head.php';?>

<body>
    <div class="login_background">
        <div class="login_middle_container">
            <a href="landing_page.php">
                <button class="login_close_button_base" onclick="">
                    <img class="login_close_button" src="images/login_close_button.png" alt="close button">
                </button>
            </a>
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
                
                    
                    <a href="" class="login_button_clickable">
                        <button class="login_button" name="login" type="submit" onclick="">
                            <span>LANJUTKAN</span>
                        </button>
                    </a>
                    <?php include 'login_check.php';?>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>