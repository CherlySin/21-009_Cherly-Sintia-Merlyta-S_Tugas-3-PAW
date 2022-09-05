<?php
    session_start();

    echo "nama lengkapku adalah " . $_SESSION["namaLengkap"] . ".<br>";
    echo "nama panggilanku adalah " . $_SESSION["namaPanggilan"] . ".<br>";
    echo "aku berusia " . $_SESSION["umur"] . ".<br>";
    echo "aku lahir pada tanggal " . $_SESSION["ttl"] . ".<br>";
    echo "tinggiku sekitar " . $_SESSION["height"] . ".<br>";
    echo "berat badanku sekitar " . $_SESSION["weight"] . ".<br>";
?>