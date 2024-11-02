<?php

$conn = mysqli_connect("localhost", "root", "", "foto");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; 
    while( $row = mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
    }
    return $rows;
}
function cari($keyword) {
  $query = "SELECT * FROM foto
              WHERE
            nama LIKE '%$keyword%' OR  deskripsi LIKE '%$keyword%' 
            ";  
  return query($query);
}

function tambah($data) {
    global $conn;     
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $gambar = upload();
   if(!$gambar) {
    return false;
   }
   
   $query = "INSERT INTO foto VALUES ('', '$nama', '$gambar', '$deskripsi')";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    
    //cek apakah tidak ada gambar yang di upload
  
    if($error === 4) {
      echo "<script>
      alert('pilih gambar terlebih dahulu!');
      </script>";
      return false;
    }
  
    //cek apakah yang diupload adalah gambar
  
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
  
    if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
      echo "<script>
      alert('yang anda upload bukan gambar!');
      </script>";
      return false;
    }
    //cek jika ukuranya terlalu besar
    if($ukuranfile > 100000000000) {
      echo "<script>
      alert('ukuran gambar terlalu besar!');
      </script>";
      return false;
    }
    //lolos pengecekan gambar siap di upload
    //generate nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpname, 'img/' . $namafilebaru);
  
    return $namafilebaru;
  }
 
?>