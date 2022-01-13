<?php

require_once "connect.php"; //menggunakan file connect.php

$sql = "select * from provinces"; //query menampilkan all data dari tabel provinces
$result = $conn->query($sql); //menjalankan query $sql

//menampilkan data
if($result->num_rows > 0){
    //menampilkan data dalam format tabel
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>ID</th> <th>Name</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()){
        
        echo "<tr><td>".$row['id'] . "</td><td>".$row['name']."</tr>";
      
    }
    echo "</table>";
}else {
    echo "0 results";
}

$conn->close();
