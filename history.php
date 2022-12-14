<?php require_once 'header.php';?>
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
<?php require_once 'footer.php';?>