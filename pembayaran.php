<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
            <a href="index_pasien.php" class="konsultasi_back_button_clickable">
                <img src="images/system_information_back_button.png" alt="Back button" class="konsultasi_back_button">
            </a>
            <div class="konsultasi_title">Pembayaran</div>
        </div>
        <div class="pembayaran_title">
            <img class="pembayaran_title_logo" src="images/pembayaran_logo.png" alt="">
            <div class="pembayaran_title_text">Rincian Pembayaran</div>
        </div>
        <div class="pembayaran_isi_base">
            <div class="pembayaran_isi_details_base">
                <div class="pembayaran_isi_details">
                    <div class="pembayaran_isi_details_title">Biaya Perawatan</div>
                    <div class="pembayaran_isi_details_harga">Rp 10.000.000</div>
                </div>
            </div>
            <div class="pembayaran_isi_details_base">
                <div class="pembayaran_isi_details">
                    <div class="pembayaran_isi_details_title">Biaya Perawatan Rumah Sakit Lainnya (Obat-obatan, DLL.)</div>
                    <div class="pembayaran_isi_details_harga">Rp 5.000.000</div>
                </div>
            </div>
            <div class="pembayaran_isi_details_base">
                <div class="pembayaran_isi_details">
                    <div class="pembayaran_isi_details_title">Biaya Kamar Rumah Sakit Per hari</div>
                    <div class="pembayaran_isi_details_harga">Rp 10.000.000</div>
                </div>
            </div>
            <div class="pembayaran_isi_total">
                <div class="pembayaran_isi_total_title">Total Pembayaran</div>
                <div class="pembayaran_isi_total_harga">Rp 25.000.000</div>
            </div>
        </div>
        <div class="pembayaran_isi_base">
            <div class="pembayaran_jenis">
                <img class="pembayaran_jenis_logo" src="images/pembayaran_jenis_logo.png" alt="">
                <div class="pembayaran_jenis_title">Metode Pembayaran</div>
                <details class="pembayaran_jenis_custom_select">
                    <summary class="pembayaran_jenis_radios">
                        <input type="radio" name="item" id="pembayaran_jenis_default" title="Pilih Metode Pembayaran" checked>
                        <input type="radio" name="item" id="item1" title="Bank Mandiri">
                        <input type="radio" name="item" id="item2" title="Bank BCA">
                        <input type="radio" name="item" id="item3" title="Kartu kredit">
                    </summary>
                    <ul class="pembayaran_jenis_list">
                        <li class="pembayaran_jenis_sublist">
                            <label class="pembayaran_jenis_label" for="item1">
                                Bank Mandiri
                                <span></span>
                            </label>
                        </li>
                        <li class="pembayaran_jenis_sublist">
                            <label class="pembayaran_jenis_label" for="item2">Bank BCA</label>
                        </li>
                        <li class="pembayaran_jenis_sublist">
                            <label class="pembayaran_jenis_label" for="item3">Kartu kredit</label>
                        </li >
                    </ul>
                </details>
            </div>
        </div>
    </div>
    <div class="system_information_footer">
    </div>
</body>
</html>