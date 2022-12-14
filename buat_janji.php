<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Janji</title>
    <link rel="stylesheet" href="css/style.css">
    
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
            <a href="index_pasien.php" class="konsultasi_back_button_clickable">
                <img src="images/system_information_back_button.png" alt="Back button" class="konsultasi_back_button">
            </a>
            <div class="konsultasi_title">
                Pasien
            </div>
        </div>
        <div class="janji_btn_base">
            <div>
                <button class="janji_poli_btn" id="poliklinik_btn" onclick="poli_show()">Poliklinik</button>
            </div>
            <div>
                <button class="janji_labo_btn" id="laboratorium_btn" onclick="lab_show()">Laboratorium</button>
            </div>
            <div>
                <button class="janji_fisi_btn" id="fisioterapi_btn" onclick="fisio_show()">Fisioterapi</button>
            </div>
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
    <div class="system_information_footer">
    </div>
    <script src="js/script.js"></script>
</body>
</html>