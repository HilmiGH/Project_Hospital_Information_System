<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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
            <button class="landing_page_login_button">
                Login
            </button>
        </div>
    </div>
    <div class="system_information_header_line"></div>
    <div class="konsultasi_content">
        <div class="konsultasi_title">Tentang Kami</div>
        
<div class="janji_btn_base">
    <div><button class="janji_poli_btn" id="poliklinik_btn" onclick="poli_show()">Poliklinik</button></div>
    <div><button class="janji_labo_btn" id="laboratorium_btn" onclick="lab_show()">Laboratorium</button></div>
    <div><button class="janji_fisi_btn" id="fisioterapi_btn" onclick="fisio_show()">Fisioterapi</button></div>
</div>
<div class="janji_content_poliklinik" id="janji_poliklinik">
    <div class="janji_nama_pasien">
        Lokasi Rumah Sakit
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Klinik
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Dokter
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Tanggal Konsultasi
        <form  action="" class="janji_tanggal_input_base" method="post">
            <input type="date" class="janji_tanggal_input">
        </form>
    </div>
    <div class="janji_nama_pasien">
        Penjaminan
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <button class="janji_cari_button" name="login" type="submit" onclick="">
        <span>Cari</span>
    </button>
</div>
<div class="janji_content_laboratorium" id="janji_laboratorium">
    <div class="janji_nama_pasien">
        Lokasi Rumah Sakit
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Tanggal Konsultasi
        <form  action="" class="janji_tanggal_input_base" method="post">
            <input type="date" class="janji_tanggal_input">
        </form>
    </div>
    <div class="janji_nama_pasien">
        Tujuan
        <form  action="" class="janji_tanggal_input_base" method="post">
            <input type="text" class="janji_tanggal_input">
        </form>
    </div>
    <div class="janji_nama_pasien">
        Penjaminan
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <button class="janji_cari_button" name="login" type="submit" onclick="">
        <span>Cari</span>
    </button>
</div>
<div class="janji_content_fisioterapi" id="janji_fisioterapi">
    <div class="janji_nama_pasien">
        Lokasi Rumah Sakit
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Tanggal Terapi
        <form  action="" class="janji_tanggal_input_base" method="post">
            <input type="date" class="janji_tanggal_input">
        </form>
    </div>
    <div class="janji_nama_pasien">
        Jam
        <form  action="" class="janji_tanggal_input_base" method="post">
            <input type="time" class="janji_tanggal_input">
        </form>
    </div>
    <div class="janji_nama_pasien">
        Penjaminan
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
                <option value=""></option>
            </select>
        </form>
    </div>
    <button class="janji_cari_button" name="login" type="submit" onclick="">
        <span>Cari</span>
    </button>
</div>
    </div>
    <div class="system_information_footer"></div>
    <script src="js/script.js"></script>
</body>
</html>