<?php 
    function connect($db, $query){
        $host = 'localhost';
        $user = 'root';
        $pass = '';    
        try {
            $conn = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass, [
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            ]);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $data = $conn->query($query);
            $result = $data->fetch();
            return $result;
            echo "<script> alert(".gettype($result).") </script>";

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>