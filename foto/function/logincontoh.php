<?php

if(isset($_POST["submit"])) {

    if($_POST["email"] == "bintang@gmail.com" && $_POST["password"] == "star") {
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}



?>