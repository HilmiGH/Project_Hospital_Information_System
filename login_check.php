<?php 
    if(isset($_POST['num'])){
        $num = $_POST['num'];
        if(!(preg_match("/^[0-9]{12}+$/", $num) || preg_match("/^[0-9]{11}+$/", $num)) ){
            echo "<script> alert('Masukkan nomor telepon yang tepat') </script>";
        }
     
        require_once 'db.php';
        $data = connect('fp_pweb_inti', 'SELECT * FROM USER WHERE PHONE='.$num);

        if($data){
            $nextpage = ['manajer', 'dokter', 'nakes', 'nonnakes', 'mitra', 'pasien'];
            $role = $nextpage[intdiv($data['ROLE_ID'], 10) - 1];
            $loc = 'index_'.$role.'.php';
            $_SESSION['ROLE'] = $role;
            header('location:'.$loc);
        } else {
         //connect('fp_pweb_inti', 'INSERT INTO USER )
        }
    }
?>
