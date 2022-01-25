<?php
include "connect.php";

if($_POST['submit'] == "Submit"){
    //Membaca inputan yang diketik didalam form
    $id = $_POST['id_provinsi']; //membaca inputan dari kolom id provinsi
    $nama = $_POST['nama_provinsi'];//membaca inputan dari kolom nama provinsi

    //membuat query sql
    $sql = "INSERT INTO provinces (id, name) VALUES ('$id','$nama')";

    //Jalankan query
    if($conn->query($sql)===TRUE){
        echo "Data berhasil ditambahkan!<br/>";
        echo "<a href = 'view.php'>Tampilkan Data</a>";
    }else{
        echo "Error :".$sql. "<br/>" .$conn->error;
        echo "<a href = 'view.php'>Tampilkan Data</a>";
    }

    $conn->close();
}
?>