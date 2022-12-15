<?php require_once 'header.php';?>

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
            <?php 
                    require_once 'db.php';
                    $data = connect('fp_pweb_rumahsakit', 'SELECT NAMA FROM rumahsakit WHERE ID IN (SELECT RS_ID FROM bhayangkara)');
                    $len = count($data);
                    foreach($data as $d){
                        echo '<option value="'.$d.'">'.$d['NAMA'].'</option>';
                    }   
            ?>
            </select>
        </form>
    </div>
    <div class="janji_nama_pasien">
        Klinik
        <form  action="" class="janji_jenis_input_base" method="post">
            <select class="janji_jenis_surat" name="" id="">
            <?php 
                    require_once 'db.php';
                    $data = connect('fp_pweb_inti', 'SELECT NAMA FROM poliklinik');
                    $len = count($data);
                    foreach($data as $d){
                        echo '<option value="'.$d.'">'.$d['NAMA'].'</option>';
                    }   
            ?>
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
            <?php 
                    require_once 'db.php';
                    $data = connect('fp_pweb_inti', 'SELECT NAMA FROM penjaminan');
                    $len = count($data);
                    foreach($data as $d){
                        echo '<option value="'.$d.'">'.$d['NAMA'].'</option>';
                    }   
            ?>
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
<script src="js/script.js"></script>
<?php require_once 'footer.php';?>