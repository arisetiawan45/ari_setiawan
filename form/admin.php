<?php
include 'koneksi.php';

?>
<html>
<head>
  <title>Formulir Pendaftaran</title>
  <style>
    /* Reset CSS untuk menghapus margin dan padding default */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Mengatur latar belakang dan ukuran tampilan */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    /* Container utama */
    .form-wrapper {
      text-align: center;
    }

    /* Mengatur ukuran logo */
    .logo {
      width: 60px;
      height: 60px;
      margin: 0 20px;
      vertical-align: middle;
    }

    /* Membuat kotak formulir pendaftaran */
    .form-container {
      margin-top: 20px;
      width: 100%;
      max-width: 400px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    /* Style untuk judul formulir */
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Style untuk setiap label dan input */
    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    /* Style untuk tombol submit */
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      border-radius: 4px;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <!-- Wrapper untuk seluruh konten formulir -->
  <div class="form-wrapper">
    <!-- Logo Kiri dan Kanan di atas formulir -->
    <div>
      <img src="POLITEKNIK PURBAYA.png" alt="Logo Kiri" class="logo">
      <img src="LOGO MERDEKA.jpg" alt="Logo Kanan" class="logo">
    </div>
    
    <!-- Formulir Pendaftaran -->
    <div class="form-container">
      <h2>Formulir Pendaftaran</h2>
      <form action="homepage.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nama Lengkap:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="telp">Telp:</label>
          <input type="text" id="telp" name="telp" required>
        </div>
        <div class="form-group">
          <label for="name">Nama ayah:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Nama Ibu:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Pekerjaan ayah:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Pekerjaan Ibu:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">PRODI:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="name">Fakultas:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <button type="submit">Daftar</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
