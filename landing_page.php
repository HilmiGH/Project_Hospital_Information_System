<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
    <div class="landing_page_header">
        <div class="landing_page_logo">Your logo</div>
        <div class="landing_page_nav_button">
            <a class="landing_page_nav_text" href="">Tentang Kami</a>
        </div>
        <div class="landing_page_nav_button">
            <a class="landing_page_nav_text" href="">Direktori</a>
        </div>
        <div class="landing_page_nav_button">
            <a class="landing_page_nav_text" href="landing_buat_janji.php">Buat Janji</a>
        </div>
        <div class="landing_page_nav_button">
            <a class="landing_page_nav_text" href="">Kontak</a>
        </div>
        <div class="landing_page_nav_button">
            <a class="landing_page_nav_text" href="login.php">
                <button class="landing_page_login_button">
                    Login
                </button>
            </a>
        </div>
    </div>
    <div class="system_information_header_line"></div>
    <div class="konsultasi_content">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/rs_bhayangkara.jpg" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/rs_bhayangkara_1.jpg" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/rs_bhayangkara_2.jpg" style="width:100%">
                <div class="text"></div>
            </div>
            <div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="landing_page_grid_btn_base">
            <a href="" class="landing_page_grid_btn">
                <img src="images/landing_page_doctor_logo.png" alt="" class="landing_page_grid_btn_image">
                <div class="landing_page_grid_btn_title">Daftar Dokter & Jadwal Dokter</div>
            </a>
            <a href="" class="landing_page_grid_btn">
                <img src="images/landing_page_buat_janji_logo.png" alt="" class="landing_page_grid_btn_image">
                <div class="landing_page_grid_btn_title">Buat Janji</div>
            </a>
            <a href="" class="landing_page_grid_btn">
                <img src="images/landing_page_klinik_logo.png" alt="" class="landing_page_grid_btn_image">
                <div class="landing_page_grid_btn_title">Daftar Klinik</div>
            </a>
            <a href="" class="landing_page_grid_btn">
                <img src="images/landing_page_ambulance_logo.png" alt="" class="landing_page_grid_btn_image">
                <div class="landing_page_grid_btn_title">Emergency</div>
            </a>
        </div>
        <div class="landing_page_lokasi_kami_main_title">Lokasi Kami</div>
        <div class="landing_page_lokasi_kami_main_base">
            <div class="landing_page_lokasi_kami_left_base">
                <div>
                    <table>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Surabaya</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Denpasar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Pontianak</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Yogyakarta</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">jakarta</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Makassar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="landing_page_lokasi_button_row">
                                <button class="landing_page_lokasi_button">Surakarta</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="landing_page_lokasi_kami_right_base">
                <img class="landing_page_rs_info_logo" src="images/rs_bhayangkara_1.jpg" alt="">
                <div class="landing_page_rs_info_title">RS. Bhayangkara Surabaya</div>
                <div class="landing_page_rs_info_desc">Jl. Ahmad Yani No.116, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231</div>
                <a class="landing_page_informasi_btn" href="">Informasi</a>
                <a class="landing_page_emergency_btn" href="emergency.php">Emergency</a>
                <button class="landing_page_rs_more_info_btn">Selengkapnya</button>
            </div>
        </div>
    </div>
    <div class="system_information_footer"></div>
    <script src="js/script.js"></script>
</body>
</html>