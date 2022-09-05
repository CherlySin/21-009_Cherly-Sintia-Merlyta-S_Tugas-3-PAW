<?php
    session_start();
    $_SESSION ['namaLengkap'] = $_POST['namaL'];
    $_SESSION ['namaPanggilan'] = $_POST['namaP'];
    $_SESSION ['umur'] = $_POST['usia'];
    $_SESSION ['ttl'] = $_POST['lahir'];
    $_SESSION ['height'] = $_POST['tinggi'];
    $_SESSION ['weight'] = $_POST['berat'];
    //menampilkan data
    echo "Nama Lengkap   : " . $_SESSION["namaLengkap"] . ".<br>";
    echo "Nama Panggilan : " . $_SESSION["namaPanggilan"] . ".<br>";
    echo "Usia           : " . $_SESSION["umur"] . ".<br>";
    echo "Tanggal Lahir  : " . $_SESSION["ttl"] . ".<br>";
    echo "Tinggi Badan   : " . $_SESSION["height"] . ".<br>";
    echo "Berat Badan    : " . $_SESSION["weight"] . ".";
?>