<?php require_once 'session.php';?>
<?php require_once 'head.php';?>
<body>
<div class="login_otp_background">
        <div class="login_otp_middle_container">
            <div class="login_otp_title">
                Kode OTP
            </div>
            <div class="login_otp_sub_title_1">
                Masukkan kode OTP 4 digit
            </div>
            <div class="login_otp_sub_title_2">
                yang telah terkirim ke nomor Anda
            </div>
            <div class="login_otp_input_and_button">
                <form action="" class="login_otp_phone_input_base">
                    <input type="text" class="login_otp_phone_input" id="login_phone_input" maxlength="1">
                    <input type="text" class="login_otp_phone_input" id="login_phone_input" maxlength="1">
                    <input type="text" class="login_otp_phone_input" id="login_phone_input" maxlength="1">
                    <input type="text" class="login_otp_phone_input" id="login_phone_input" maxlength="1">
                </form>
                <div class="login_otp_kirim_ulang_otp_text">
                    <button class="login_otp_kirim_ulang_otp_button">
                        Kirim ulang OTP
                    </button>
                <a href="index_dokter.php" class="login_otp_button_clickable">
                    <button class="login_otp_button" type="button" onclick="">
                        LANJUTKAN
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>