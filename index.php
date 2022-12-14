<?php 
    // Keep login
    require_once 'session.php';
    // HTML head
    require_once 'head.php';
    // Header
    echo
        '<div class="system_information_header">
            <span class="system_information_logo">Your logo</span>
            <a href="login.php">
                <img class="system_information_logout_button" src="images/dashboard_logout_button.png" alt="log out button">
            </a>
        </div>
        <div class="system_information_header_line"></div>';
    echo '<div class="konsultasi_content">';

    echo '<body>';

    $role = $_SESSION['ROLE'];
    // Greetings
    echo
        '<div class="top_banner top_banner_'.$role.'">
            <div><img class="profile_logo"src="images/dashboard_account_logo.png" alt="profile logo"></div>
            <span class="greeting">
                <strong>Selamat Datang!</strong>
                <br />
                Nama Pasien
            </span>
        </div>';

    echo '<div class="main">';

    // Dashboard type (10 tile or 8 tile)
    
    if($role == 'pasien' || $role == 'dokter'){
        echo '<div class="main_dashboard">';
    } else {
        echo '<div class="main_dashboard_4_tiles">';
    }

    // Customize dashboard based on user role
    $access = [
        'manajer' => ['data_manajer', 'penugasan'],
        'dokter'  => ['konsultasi', 'visite', 'rujukan', 'buat surat'],
        'nakes'   => ['pasien', 'dokter jaga'],
        'nonnakes'=> ['data_nakes', 'permintaan'],
        'mitra'   => ['data_mitra', 'klaim'],
        'pasien'  => ['buat janji', 'obat', 'pembayaran', 'feedback']
    ];
    $common  = ['laporan', 'profile', 'schedule', 'history', 'settings', 'about'];
    $pages = array_merge($access[$role], $common);
    foreach($pages as $temp){
        echo
            '<div class="button_base">
                <div class="dashboard_button dashboard_button_'.$role.'">
                    <a href="'.str_replace(" ", "_", $temp).'.php" class="button_clickable">
                        <div class="button_content">
                            <img class= "button_logo" src="images/dashboard_'.str_replace(" ", "_", $temp).'_logo.png" alt="Logo '.ucwords($temp).'">
                        </div>
                        <div class="button_title">
                            '.ucwords($temp).'
                        </div>
                    </a>
                </div>
            </div>';
    }
    echo '</div>';

    // Footer
    echo 
        '<div class="footer">
            © 2022 Bhayangkara
        </div>
        </div>
        </body>
        </html>';
?>
