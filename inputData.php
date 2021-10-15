<?php
    include "koneksi.php";
    $nama = $_POST["nama"];
    $kritik = $_POST["kritik"];
    echo $nama;
    $sql = "insert into info(nama,kritik) values('$nama','$kritik')";

    $hasil = mysqli_query($conn,$sql);
    if($hasil){
        header("location: index.php?benar=ada_salah", true, 301);
    }
?>