<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
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
            <div class="konsultasi_title">
                Konsultasi
            </div>
        </div>
        <div class="konsultasi_nomor_urut_pasien_base">
            <div class="konsultasi_nomor_urut_pasien_title">
                Nomor Urut Pasien
            </div>
        </div>
        <div class="konsultasi_informasi_pasien_base">
            <img src="images/konsultasi_pasien_logo.png" alt="Logo Pasien" class="konsultasi_pasien_logo">
            <div class="konsultasi_informasi_pasien_nama">[Nama Pasien]</div>
            <div class="konsultasi_informasi_pasien_usia">[Usia]</div>
            <div class="konsultasi_informasi_pasien_tekanan_darah">
                Tekanan Darah
                <div class="konsultasi_informasi_pasien_tekanan_darah_data">

                </div>
            </div>
            <div class="konsultasi_informasi_pasien_berat_tinggi">
                Berat Badan / Tinggi Badan
                <div class="konsultasi_informasi_pasien_berat_tinggi_data">

                </div>
            </div>
            <div class="konsultasi_informasi_pasien_hasil_pemeriksaan">
                Hasil Pemeriksaan
                <button class="konsultasi_informasi_pasien_hasil_pemeriksaan_tambah_button">
                    <img class="konsultasi_informasi_pasien_hasil_pemeriksaan_tambah_image" src="images/konsultasi_tambah_list.png" alt="">
                </button>
                <div class="konsultasi_informasi_pasien_hasil_pemeriksaan_data">
                    
                </div>
            </div>
            <div class="konsultasi_informasi_pasien_resep_obat">
                Resep Obat
                <button class="konsultasi_informasi_pasien_hasil_pemeriksaan_resep_obat_tambah_button">
                    <img class="konsultasi_informasi_pasien_hasil_pemeriksaan_resep_obat_image" src="images/konsultasi_tambah_list.png" alt="">
                </button>
                <div class="konsultasi_informasi_pasien_resep_obat_data">
                    
                </div>
            </div>
            <div class="konsultasi_informasi_pasien_footer">
                <div class="konsultasi_informasi_pasien_footer_Rujukan">
                    Rujukan
                    <a href="rujukan.php">
                        <button class="konsultasi_informasi_pasien_footer_Rujukan_button">
                            <img class="konsultasi_informasi_pasien_footer_Rujukan_image" src="images/konsultasi_right_arrow.png" alt="">
                        </button>    
                    </a>
                </div>
                <div class="konsultasi_informasi_pasien_footer_Buat_Surat">
                    Buat Surat
                    <a href="buat_surat.php">
                        <button class="konsultasi_informasi_pasien_footer_Rujukan_button">
                            <img class="konsultasi_informasi_pasien_footer_Rujukan_image" src="images/konsultasi_right_arrow.png" alt="">
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="system_information_footer">
    </div>
</body>
</html>