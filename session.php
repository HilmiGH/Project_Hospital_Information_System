<?php 
    if(count(get_included_files()) == 1){
        exit("Direct access not permitted.");
    }

    session_start();
    if(!isset($_SESSION['ROLE'])){
        if($_SERVER['PHP_SELF'] != '/rsb/login.php'){
            header('Location:login.php');
            exit();
        }
    } else { 
        $access = [
            'manajer' => ['index_manajer', 'data_manajer', 'penugasan'],
            'dokter'  => ['index_dokter', 'konsultasi', 'visite', 'rujukan', 'buat_surat', 
                        'laporan_rawat_jalan', 'laporan_rawat_inap'],
            'nakes'   => ['index_nakes', 'pasien', 'dokter_jaga'],
            'nonnakes'=> ['index_nonnakes', 'data_nakes', 'permintaan'],
            'mitra'   => ['index_mitra', 'data_mitra', 'klaim'],
            'pasien'  => ['index_pasien', 'buat_janji', 'obat', 'pembayaran', 'feedback']
        ];
        $role = $_SESSION['ROLE'];
        $loc = 'index_'.$role.'.php';

        // Pages
        $allowed = $access[$role];
        $current = substr($_SERVER['PHP_SELF'], 5, -4);
        $common  = ['profile', 'schedule', 'history', 'settings', 'about'];

        if(!in_array($current, $allowed) && !in_array($current, $common)){
            header('location:'.$loc);
            exit();
        }
    }
?>