<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="system_information_header">
        <span class="system_information_logo">
            Your logo
        </span>
        <a href="login.php">
            <img class="system_information_logout_button" src="images/dashboard_logout_button.png" alt="log out button">
        </a>
    </div>
    <div class="system_information_header_line">
    </div>
    <div class="konsultasi_content">
        <div class="konsultasi_title_navigation">
            <a href="index_dokter.php" class="konsultasi_back_button_clickable">
                <img src="images/system_information_back_button.png" alt="Back button" class="konsultasi_back_button">
            </a>
            <div class="konsultasi_title">Profile</div>
        </div>
        <div class="profile_main_profile">
            <img class="profile_main_logo" src="images/profile_logo.png" alt="Profile Photo">
            <div class="profile_main_name">Nama</div>
            <div class="profile_main_role">Role</div>
        </div>
        <div class="profile_role">
            <img class="profile_role_logo" src="images/profile_role_logo.png" alt="">
            <div class="profile_role_title">Jabatan</div>
            <div class="profile_role_content">Role</div>
        </div>
        <div class="profile_telepon">
            <img class="profile_telepon_logo" src="images/profile_telephone_logo.png" alt="">
            <div class ="profile_telepon_nomor">+62 1234567890</div>
        </div>
            <div class="profile_email">
                <img class="profile_email_logo" src="images/profile_email_logo.png" alt="">
            <div class="profile_email_address">nama@rs.com</div>
        </div>
            <div class="profile_NIK_NIP">
                <img class="profile_NIK_NIP_logo" src="images/profile_NIK_NIP_logo.png" alt="">
            <div class="profile_NIK_NIP_nomor">[NIK/NIP]</div>
        </div>
        <div class="profile_info_content">
            <div class="profile_info_title">Personal Information</div>
            <div class="profile_info_subtitle">Data Pribadi Anda</div>
            <div class="profile_info_tanggal_lahir_div">
                <img class="profile_info_tanggal_logo" src="images/profile_info_calendar_logo.png" alt="">
                <span class="profile_info_tanggal_title">Tanggal Lahir</span>
                <form  action="" class="profile_info_tanggal_input_base" method="post">
                    <input type="text" class="profile_info_tanggal_input">
                </form>
            </div>
            <div class="profile_info_tanggal_lahir_div">
                <img class="profile_info_tanggal_logo" src="images/profile_info_rekam_medis_logo.png" alt="">
                <span class="profile_info_tanggal_title">Rekam Medis</span>
                <form  action="" class="profile_info_rekam_medis_input_base" method="post">
                    <input type="text" class="profile_info_rekam_medis_input">
                </form>
            </div>   
            <div class="profile_info_tanggal_lahir_div">
                <img class="profile_info_tanggal_logo" src="images/profile_info_tinggi_badan_logo.png" alt="">
                <span class="profile_info_tanggal_title">Tinggi Badan</span>
                <form  action="" class="profile_info_tinggi_badan_input_base" method="post">
                    <input type="text" class="profile_info_tinggi_badan_input">
                </form>
                <div class="profile_info_tanggal_lahir_tambahan">cm</div>
            </div> 
            <div class="profile_info_tanggal_lahir_div">
                <img class="profile_info_tanggal_logo" src="images/profile_info_berat_badan_logo.png" alt="">
                <span class="profile_info_tanggal_title">Berat Badan</span>
                <form  action="" class="profile_info_berat_badan_input_base" method="post">
                    <input type="text" class="profile_info_berat_badan_input">
                </form>
                <div class="profile_info_tanggal_lahir_tambahan">kg</div>
            </div> 
            <div class="profile_info_tanggal_lahir_div">
                <img class="profile_info_tanggal_logo" src="images/profile_info_golongan_darah_logo.png" alt="">
                <span class="profile_info_tanggal_title">Golongan darah</span>
                <form  action="" class="profile_info_golongan_darah_input_base" method="post">
                    <input type="text" class="profile_info_golongan_darah_input">
                </form>
            </div>     
        </div>
    </div>
    <div class="system_information_footer">
    </div>
</body>
</html>