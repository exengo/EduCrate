<?php
function get_mail($mail){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $dbconn = new mysqli("localhost", "root", "1Im2Exengo!", "educrate");
        $dbconn -> query("INSERT INTO email (email) VALUE ('" . $mail . "')" );
        $dbconn -> close();
        return true;
    } else {
        return false;
    }
}

echo get_mail($_REQUEST["mail"]);