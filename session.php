<?php 
    // if(count(get_included_files()) == 1){
    //     exit("Direct access not permitted.");
    // }

    session_start();
    if(!isset($_SESSION['ROLE'])){
        if($_SERVER['SELF'] != '/rsb/login.php'){
            header('Location:login.php');
            exit();
        }
    } else { 
        $access = [
            'manajer' => ['data_manajer', 'penugasan', 'laporan_manajer'],
            'dokter'  => ['konsultasi', 'visite', 'rujukan', 'buat_surat', 
                        'laporan_dokter', 'laporan_rawat_jalan', 'laporan_rawat_inap'],
            'nakes'   => ['pasien', 'dokter_jaga', 'laporan_nakes'],
            'nonnakes'=> ['data_nakes', 'permintaan', 'laporan_nonnakes'],
            'mitra'   => ['data_mitra', 'klaim', 'laporan_mitra'],
            'pasien'  => ['buat_janji', 'obat', 'pembayaran', 'feedback','laporan_pasien']
        ];
        $role = $_SESSION['ROLE'];

        // Pages
        $allowed = $access[$role];
        $current = substr($_SERVER['SELF'], 5, -4);
        $common  = ['index','laporan', 'profile', 'schedule', 'history', 'settings', 'about'];

        if(!in_array($current, $allowed) && !in_array($current, $common)){
            header('location:index.php');
            exit();
        }
    }
?>