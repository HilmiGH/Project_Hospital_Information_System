<?php
    $data = $_SESSION["DATA"];
    if($data){
        $nextpage = ['manajer', 'dokter', 'nakes', 'nonnakes', 'mitra', 'pasien'];
        $role = $nextpage[intdiv($data['ROLE_ID'], 10) - 1];
        $_SESSION['ROLE'] = $role;
    }
?>