<?php
    if ( isset( $_POST["email"]) || isset($_POST["password"]) ){
        $email = $_POST ["email"];
        $password = $_POST ["password"];
        if ($email == "gue@admin.com" && $password == "ganteng"){
            header("location: ./../dasboard.php");
        } else {
            echo"GMAIL / PASWORD ANDA SALAH MAHARAJA";
        }
     }

?>