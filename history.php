<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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
            <div class="konsultasi_title">
                History
            </div>
        </div>
        <div class="rujukan_content">
            <div class="rujukan_nama_pasien">
                Pasien
                <form  action="" class="rujukan_nama_pasien_input_base" method="post">
                    <input type="text" class="rujukan_nama_pasien_input">
                </form>
            </div>
            <div class="rujukan_jaminan_pasien">
                Tanggal
                <form  action="" class="rujukan_jaminan_pasien_input_base" method="post">
                    <input type="date" class="rujukan_jaminan_pasien_input">
                </form>
            </div>
            <div class="rujukan_jenis">
                Jenis Surat
                <form  action="" class="rujukan_jenis_input_base" method="post">
                    <select class="buat_surat_jenis_surat" name="" id="">
                        <option value=""></option>
                    </select>
                </form>
            </div>
            <div class="rujukan_keterangan">
                Keterangan
                <form  action="" class="rujukan_keterangan_input_base" method="post">
                    <input type="text" class="rujukan_keterangan_input">
                </form>
            </div>
            <div class="buat_surat_tanda_tangan_dokter_base">
                <input type="checkbox">
                <div class="buat_surat_tanda_tangan_dokter_title">
                    Sematkan tanda tangan dokter
                </div>
            </div>
            <button class="rujukan_buat_rujukan_button" name="login" type="submit" onclick="">
                <span>Buat Rujukan</span>
            </button>
        </div>
    </div>
    <div class="system_information_footer">
    </div>
</body>
</html>