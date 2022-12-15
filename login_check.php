<?php 
    if(isset($_POST['login'])){
        $num = $_POST['num'];
        if(!(preg_match("/^[0-9]{12}+$/", $num) || preg_match("/^[0-9]{11}+$/", $num)) ){
            echo "<script> alert('Masukkan nomor telepon yang tepat') </script>";
        }
        require_once 'db.php';
        $data = connect('fp_pweb_inti', 'SELECT ROLE_ID FROM USER WHERE PHONE='.$num);
        $_SESSION['DATA'] = $data;
        header('location:login_otp.php');
       
         //connect('fp_pweb_inti', 'INSERT INTO USER )
        
    }
?>
