<?php

require 'function/functions.php';



if(isset($_POST["submit"])) {
   

    if(tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'; 
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php'; 
        </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myGallery-upload</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
        <h1>myGallery.</h1>
        </div>
        <div class="nav-buttons">
            <a href="index.php" class="btn home">Home</a>
        </div>
    </nav>

    <!-- Upload Form -->
    <div class="upload-container">
        <h2>Upload Your Photo</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="gambar" class="upload-label">Choose File</label>
            <input type="file" id="gambar" name="gambar" class="upload-input">
            <span id="fileName">Tidak ada file yang dipilih</span>

            <input type="text" name="nama" placeholder="Enter image name" class="upload-name">
            <textarea type="text" name="deskripsi" placeholder="Enter image description" class="upload-description"></textarea>
            <button type="submit" name="submit" class="btn submit">Submit</button>
        </form>
    </div>


    <script>
    const fileInput = document.getElementById('gambar');
    const fileName = document.getElementById('fileName');

    fileInput.addEventListener('change', function() {
        fileName.textContent = this.files.length > 0 ? this.files[0].name : 'Tidak ada file yang dipilih';
    });
</script>

</body>
</html>
