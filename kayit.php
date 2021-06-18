<?php
    require 'config.php';

    if ( $_POST ) {
        
        $isim_soyisim = $_POST['isim_soyisim'];
        $email        = $_POST['email'];
        $sifre        = $_POST['sifre'];

        $id = DB::insert("INSERT INTO uyeler(uye_adi,email,sifre) VALUES(?,?,?)",array(
            $isim_soyisim,
            $email,
            $sifre
        ));

        header("Location:index.php?success=1");
    }

    ?> 