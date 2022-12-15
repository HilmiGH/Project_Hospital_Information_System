<?php 
    // if(count(get_included_files()) == 1){
    //     exit("Direct access not permitted.");
    // }

    session_start();
    // Current page
    $current = substr($_SERVER['PHP_SELF'], 5, -4);

    if(!isset($_SESSION['ROLE'])){
        if($current != 'login' && $current != 'login_otp'){
            header('Location:login.php');
            exit();
        }
    } else { 
        $access = [
            'manajer' => ['penugasan', 'laporan_manajer'],
            'dokter'  => ['konsultasi', 'visite', 'rujukan', 'buat_surat', 
                        'laporan_dokter', 'laporan_rawat_jalan', 'laporan_rawat_inap'],
            'nakes'   => ['pasien', 'dokter_jaga', 'laporan_nakes'],
            'nonnakes'=> ['permintaan', 'laporan_nonnakes'],
            'mitra'   => ['klaim', 'laporan_mitra'],
            'pasien'  => ['buat_janji', 'obat', 'pembayaran', 'feedback','laporan_pasien']
        ];
        $role = $_SESSION['ROLE'];

        // Pages
        $allowed = $access[$role];
        $common  = ['index','data','laporan', 'profile', 'schedule', 'history', 'settings', 'about'];

        if(!in_array($current, $allowed) && !in_array($current, $common)){
            header('Location:index.php');
            exit();
        }
    }
?>