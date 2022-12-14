<?php require_once 'header.php';?>
<script src="js/script.js"></script>
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
<?php require_once 'footer.php';?>