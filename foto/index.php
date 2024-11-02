<?php

require 'function/functions.php';

$foto = query("SELECT * FROM foto");

if(isset($_POST["cari"])) {
    $foto = cari($_POST["keyword"]);
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myGallery-home</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style>
    
</style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <h1>myGallery.</h1>
        </div>
        <div class="search-bar">
            <form action="" method="post">
            <input type="text" name="keyword" autofocus placeholder="Search..." autocomplete="off">
            <button type="submit" name="cari" class="submit-button">submit</button>
            </form>
         
        </div>
        <div class="nav-buttons">
            <ul>
            <a href="login.php" class="btn login">logout</a>
            <a href="upload.php" class="btn upload">Upload</a>
            </ul>
           
        </div>
    </nav>

    <!-- Grid Layout -->
    <div class="grid-container">
        <?php foreach($foto as $row) : ?>
        <div class="grid-item">
    
            <img id="foto"  src="img/<?= $row["gambar"]; ?>" alt="Gambar" onclick="tampilkanGambar(this.src)">
            <div id="fullscreenContainer" class="hidden" onclick="tutupGambar()">
            <div class="fullscreen">
        <img id="gambarFullscreen" src="" alt="Gambar Besar">
    </div>
</div>

<script>
    function tampilkanGambar(src) {
        const container = document.getElementById('fullscreenContainer');
        const gambarFullscreen = document.getElementById('gambarFullscreen');
        
        gambarFullscreen.src = src;
        container.classList.remove('hidden');
    }

    function tutupGambar() {
        const container = document.getElementById('fullscreenContainer');
        container.classList.add('hidden');
    }
</script>
           


            <p class="description1"><?= $row["nama"]; ?></p>
            <p class="description"><?= $row["deskripsi"]; ?></p>
        </div>
        <?php endforeach; ?> 
    </div>
    <a href="#top" class="scrollToTop">↑ Kembali ke Atas</a>
    

   

<footer class="footer">
<p>&copy; 2024 myGallery. All Rights Reserved.</p>
</footer>

</body>
</html>
