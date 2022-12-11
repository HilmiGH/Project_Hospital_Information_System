<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div class="system_information_header">
        <span class="system_information_logo">
            Your logo
        </span>
        <a href="login.php">
            <img class="system_information_logout_button" src="images/dashboard_logout_button.png" alt="log out button">
        </a>
    </div>
    <div class="system_information_header_line">
    </div>
    <div class="konsultasi_content">
        <div class="konsultasi_title_navigation">
            <a href="index_dokter.php" class="konsultasi_back_button_clickable">
                <img src="images/system_information_back_button.png" alt="Back button" class="konsultasi_back_button">
            </a>
            <div class="konsultasi_title">Settings</div>
        </div>
        <div class="settings_option_base">
            <img class="settings_dark_mode_image" src="images/settings_dark_mode_logo.png" alt="">
            <div class="settings_dark_mode_title">Dark Mode</div>
            <div class="settings_dark_mode_subtitle">Comfortable night view</div>
            <form  action="" class="settings_dark_mode_input_base" method="post">
                    <select class="settings_dark_mode_input" name="" id="">
                        <option value="disabled_dark_mode">Disabled</option>
                        <option value="dark_mode">Dark</option>
                    </select>
            </form>
        </div>
        <div class="settings_option_base">
            <img class="settings_dark_mode_image" src="images/settings_language_logo.png" alt="">
            <div class="settings_dark_mode_title">Language</div>
            <div class="settings_dark_mode_subtitle">Choose your preferred language</div>
            <form  action="" class="settings_language_input_base" method="post">
                    <select class="settings_language_input" name="" id="">
                        <option value="english_language">English</option>
                        <option value="indonesian_language">Bahasa Indonesia</option>
                    </select>
            </form>
        </div>
    </div>
    <div class="system_information_footer">
    </div>
</body>
</html>