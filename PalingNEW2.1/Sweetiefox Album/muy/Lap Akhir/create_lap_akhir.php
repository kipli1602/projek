<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lap_akhir = $_FILES['lap_akhir'];
    $nama = $_POST['nama'];

   

    $fileStream = fopen($lap_akhir['tmp_name'], 'rb');

    $query = "INSERT INTO akhir (nama, file_lap_akhir) VALUES (?, ?)";
    $params = [
        [$nama, SQLSRV_PARAM_IN],
        [$fileStream, SQLSRV_PARAM_IN, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY)],
    ];

    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        echo "<pre>";
        print_r(sqlsrv_errors());
        echo "</pre>";
        exit();
    } else {
        header("Location: tabel_lap_akhir_peneliti.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Tambah Laporan Akhir</title> 
    <link rel="icon" href="Logo Astra LapAkhir.png" type="image/png"> 
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
   
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f9f9f9;
    }

    a {
      text-decoration: none;
    }

    /* Layout utama dengan sidebar */
    .custom-container {
      display: flex;
      height: 100vh;
    }

    /* Gambar logo sidebar */
    .custom-image {
      width: 100%;
      height: auto;
      margin-bottom: 40px;
    }

    /* Sidebar navigasi */
    .custom-sidebar {
      width: 250px;
      background-color: #fff;
      padding: 20px 10px;
      border-right: 1px solid #000;
    }

     /* Link navigasi */   
    .nav-link {
      display: block;
      padding: 8px 15px;
      background-color: white;
      border-radius: 8px;
      color: #1988ff;
      font-weight: bold;
      text-align: left;
      margin: 5px 0;
      transition: all 0.3s ease;
      cursor: pointer;
      font-size: 1rem;
    }

    .nav-link i {
      margin-right: 8px;
      font-size: 1.2rem;
      color: #000;
    }

    .nav-link:hover,
    .nav-link:hover i {
      background-color: #1988ff;
      color: white;
    }

    /* Dropdown menu proposal */
    .custom-dropdown-toggle {
      display: block;
      padding: 8px 15px;
      background-color: white;
      color: #1988ff;
      font-weight: bold;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      text-align: left;
      margin: 5px 0;
      cursor: pointer;
    }

    .custom-dropdown-toggle i {
      margin-right: 8px;
      font-size: 1.2rem;
      color: #000000;
    }

    .custom-dropdown-toggle:hover,
    .custom-dropdown-toggle:hover i {
    background-color: #1988ff;
    color: white;
    transition: all 0.3s ease;
    }


    .custom-dropdown-menu {
      display: none;
      margin-left: 25px;
      margin-top: 5px;
    }

    .custom-dropdown-menu a {
      display: block;
      padding: 5px 0;
      color: #1988ff;
      font-weight: bold;
      font-size: 0.95rem;
    }

    .custom-dropdown-menu :hover{
      color: white;
      background-color: #1988ff;
      border-radius: 8px;
      padding-left: 10px;
      transition: all 0.3s ease;
    }

    .custom-dropdown-menu a:hover i {
      color: white;
      border-radius: 8px;
      padding-left: 10px;
      transition: all 0.3s ease;
    }

 
    .custom-dropdown-menu i {
      margin-right: 6px;
      font-size: 1rem;
      color: #000;
    }

    
    /* Area utama */
    .custom-main-content {
      flex: 1;
      padding: 20px;
      background-image: url('Backround.png');
      background-repeat: no-repeat;
      background-position: bottom right;
      background-size: 1500px auto;
    }

    /* Header kanan atas */
    .custom-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      background: white;
      padding: 15px;
      border-bottom: 1px solid #ccc;
      margin-bottom: 20px;
    }

    .custom-profile {
      text-align: right;
      font-family: "Roboto", Helvetica;
      font-weight: 500;
      color: #000;
      font-size: 20px;
      position: relative;
      margin-left: auto;
    }

    .custom-profile span {
      font-size: 24px;
      font-weight: bold;
      display: block;
    }

    .custom-notification-dot {
      position: absolute;
      top: -5px;
      right: -5px;
      width: 14px;
      height: 14px;
      background-color: red;
      border-radius: 50%;
      border: 2px solid white;
    }

    /* Breadcrumb */
    .custom-breadcrumb {
      color: #1988ff;
      padding-bottom: 10px;
    }

    .cari {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      padding-bottom: 10px;
    }

/* FORM LAPORAN AKHHIR */
/* Header form laporan akhir */
.laporan-header {
    background-color: #D9D9D9;
    padding: 4px 12px;             
    border-radius: 8px 8px 0 0;
    font-size: 13px;                
}

.laporan-header h3 {
    font-size: 14px;                
    font-weight: bold;             
    margin: 0;                     
    padding: 4px 0;                
}

/* Kontainer form */
.form-container {
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    flex-direction: column; /* Konten form diatur vertikal */
}

    /* Tombol simpan dan kembali */
   .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 20px;
        align-self: flex-end; /* Jika masih perlu didorong lebih ke kanan */
    }

/* Form grup */
.form-group {
    margin-bottom: 20px;    
}

/* Label form */
.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

/* Link download template */
.text-download {
    color: #1988ff;
    text-decoration: none;
    font-weight: bold;
}

.text-download:hover {
    text-decoration: underline;
}

/* Button Simpan dan Kembali */
.btn-simpan {
    padding: 8px 20px;
    background-color: #107ACC;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    margin-right: -60;
}

.btn-simpan:hover {
    background-color: #1d67a0;
}

.btn-kembali {
    display: inline-block;
    padding: 8px 20px;
    background-color: #747474;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.btn-kembali:hover {
    background-color: #ada8a8;
}

.file-info {
    display: block;
    margin-top: 5px;
    color: #666;
    font-size: 12px;
}

#error-msg {
    color: red;
    display: none;
    margin-top: 5px;
    font-size: 14px;
}

    </style>
</head>
<body>
<div class="custom-container">
  <aside class="custom-sidebar">
    <a><i class="bi bi-justify"></i></a>
    <img src="logo sidebar.png" alt="Logo Astra" class="custom-image">
    <nav class="nav flex-column w-100">
      <a class="nav-link" href="dashboard_peneliti.html"><i class="fa fa-home"></i> Dashboard</a>
      <a class="nav-link" href="tabel_lap_akhir_peneliti.html"><i class="fa fa-info-circle"></i> Informasi</a>
      <div class="custom-dropdown">
        <a class="custom-dropdown-toggle"><i class="fa fa-chevron-down"></i> Proposal</a>
        <div class="custom-dropdown-menu">
          <a href="#"><i class="fa fa-minus"></i> Ajukan Proposal</a>
          <a href="#"><i class="fa fa-minus"></i> Konfirmasi Proposal</a>
          <a href="#"><i class="fa fa-minus"></i> Daftar Proposal</a>
        </div>
      </div>
      <a class="nav-link" href="tabel_proposal_peneliti.html"><i class="fa fa-book"></i> LogBook</a>
      <a class="nav-link" href="tabel_proposal_peneliti.html"><i class="fa fa-chart-line"></i> Laporan Kemajuan</a>
      <a class="nav-link" href="tabel_proposal_peneliti.html"><i class="fa fa-file-export"></i> Laporan Akhir</a>
    </nav>
  </aside>

  <main class="custom-main-content">
    <header class="custom-header">
      <div class="custom-profile">
        <span>Boy Wiliam (Peneliti) <i class="fa fa-envelope"></i><span class="custom-notification-dot"></span></span>
      </div>
    </header>

    <div class="custom-breadcrumb">Sistem Penelitian / Dashboard</div>

    <div id="create-view" class="mt-4">
      <div class="laporan-header">
        <h3>Tambah Laporan Akhir</h3>
      </div>

      <div class="form-box">
        <div class="form-container">
          <div id="form" class="form-group mb-3">
            <label>Template Dokumen Laporan Akhir:</label>
            <a href="Test.pdf" download="Template Laporan Akhir.pdf" class="text-download">
              <i class=""></i> Unduh Template
            </a>
          </div>

          <!-- FORM DIMULAI DI SINI -->
          <form class="form-group mb-3" method="POST" enctype="multipart/form-data">
            <label>Upload Dokumen Laporan Akhir (.pdf):</label>
            <input type="file" id="laporan-file" name="lap_akhir" class="form-control" accept=".pdf" style="width: 30%;">
            <small class="file-info" id="error-msg" style="color: red; display: none;"></small>

            <label>nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" style="width: 30%;">
            <small class="file-info" id="error-msg" style="color: red; display: none;"></small>

            <div class="form-actions">
              <a href="tabel_lap_akhir_peneliti.html" class="btn-kembali">Kembali</a>
              <button id="btnSimpan" class="btn-simpan" type="submit">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal konfirmasi -->
    <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Laporan Akhir</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            Laporan berhasil diunggah kembali ke menu utama?
          </div>
          <div class="modal-footer">
            <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
            <button id="btnKonfirmasiOke" class="btn btn-primary" type="button">Oke</button>

          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btnSimpan = document.getElementById("btnSimpan");
    const inputFile = document.getElementById("laporan-file");
    const errorMsg = document.getElementById("error-msg");

    btnSimpan.addEventListener("click", function (e) {
      e.preventDefault();
      validateAndSubmit();
    });

    function showError(message) {
      errorMsg.textContent = message;
      errorMsg.style.display = "block";
    }

    function hideError() {
      errorMsg.textContent = "";
      errorMsg.style.display = "none";
    }

    function validateAndSubmit() {
      const file = inputFile.files[0];
      hideError();

      if (!file) {
        showError("Silakan unggah file laporan akhir.");
        return;
      }

      if (!file.name.toLowerCase().endsWith(".pdf")) {
        showError("File harus berformat PDF (.pdf)");
        return;
      }

      const maxSizeBytes = 2 * 1024 * 1024;
      if (file.size > maxSizeBytes) {
        showError("Ukuran file maksimal 2 MB.");
        return;
      }

      const modal = new bootstrap.Modal(document.getElementById("konfirmasiModal"));
      modal.show();
    }

    document.getElementById("btnKonfirmasiOke").addEventListener("click", function () {
  document.querySelector("form").submit();

  
});


    // Dropdown menu
    document.querySelectorAll('.custom-dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', function () {
        const menu = this.nextElementSibling;
        const icon = this.querySelector('i');
        const isVisible = menu.style.display === 'block';

        document.querySelectorAll('.custom-dropdown-menu').forEach(m => m.style.display = 'none');
        document.querySelectorAll('.custom-dropdown-toggle i').forEach(i => {
          i.classList.remove('fa-chevron-up');
          i.classList.add('fa-chevron-down');
        });

        if (!isVisible) {
          menu.style.display = 'block';
          icon.classList.remove('fa-chevron-down');
          icon.classList.add('fa-chevron-up');
        } else {
          menu.style.display = 'none';
          icon.classList.remove('fa-chevron-up');
          icon.classList.add('fa-chevron-down');
        }
      });
    });

    // Close dropdown on outside click
    window.addEventListener('click', function (e) {
      document.querySelectorAll('.custom-dropdown-menu').forEach(menu => {
        if (!menu.previousElementSibling.contains(e.target) && !menu.contains(e.target)) {
          menu.style.display = 'none';
          menu.previousElementSibling.querySelector('i').classList.remove('fa-chevron-up');
          menu.previousElementSibling.querySelector('i').classList.add('fa-chevron-down');
        }
      });
    });
  });
</script>
</body>
</html>
