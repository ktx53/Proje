<?php 
    require 'config.php';
    if ( $_POST ) {
        
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        $kontrol = DB::getRow("SELECT * FROM uyeler WHERE email=? AND sifre=?",array(
            $email,
            $sifre
        ));

        if ( $kontrol ) {
            $_SESSION['login'] = $kontrol->id;
            header("Location:kayitol.html");
            die();
        }
        else
        {
            header("Location:index.php?error=1");
            die();
        }
    }

