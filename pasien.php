<?php require_once 'header.php';?>
<div class="pasien_content">
    <div class="pasien_content_title">Poliklinik</div>
    <form  action="" class="pasien_content_poliklinik_input_base" method="post">
        <select class="pasien_content_poliklinik_input" name="" id="">
            <option value="poliklinik_anak">Anak</option>
            <option value="poliklinik_jantung">Jantung</option>
        </select>
    </form>
    <table class="pasien_content_table_base">
        <tr>
            <th class="pasien_content_table_header">No. Antrian</th>
            <th class="pasien_content_table_header">Nama Pasien</th>
            <th class="pasien_content_table_header">Penjaminan</th>
            <th class="pasien_content_table_header">Keterangan</th>
            <th></th>
        </tr>
        <tr class="pasien_content_table_row">
            <td class="pasien_content_table_row_each">B001</td>
            <td class="pasien_content_table_row_each">Roni</td>
            <td class="pasien_content_table_row_each">BPJS</td>
            <td class="pasien_content_table_row_each">Sedang Diperiksa</td>
            <td class="pasien_content_table_row_without_right">
                <button class="pasien_content_table_row_button" id="pasien_content_active">
                    <img class="pasien_content_table_row_button_logo" src="images/konsultasi_right_arrow.png" alt="">
                </button>
            </td>
        </tr>
        <tr class="pasien_content_table_row">
            <td class="pasien_content_table_row_each">P001</td>
            <td class="pasien_content_table_row_each">Rani</td>
            <td class="pasien_content_table_row_each">Mitra Perusahaan</td>
            <td class="pasien_content_table_row_each">Belum Diperiksa</td>
            <td class="pasien_content_table_row_without_right">
                <button class="pasien_content_table_row_button" id="pasien_content_inactive">
                    <img class="pasien_content_table_row_button_logo" src="images/konsultasi_right_arrow.png" alt="">
                </button>
            </td>
        </tr>
        <tr class="pasien_content_table_row">
            <td class="pasien_content_table_row_each_final" >M001</td>
            <td class="pasien_content_table_row_each_final">Rina</td>
            <td class="pasien_content_table_row_each_final">Mandiri</td>
            <td class="pasien_content_table_row_each_final">Belum Diperiksa</td>
            <td class="pasien_content_table_row_without_right">
                <button class="pasien_content_table_row_button" id="pasien_content_inactive">
                    <img class="pasien_content_table_row_button_logo" src="images/konsultasi_right_arrow.png" alt="">
                </button>
            </td>
        </tr>
    </table>
</div>
<?php require_once 'footer.php';?>
