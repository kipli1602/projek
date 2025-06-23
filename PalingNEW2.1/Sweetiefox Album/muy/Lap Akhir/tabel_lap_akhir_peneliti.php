<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard ASTRAtech</title>
  <link rel="icon" href="Logo Astra LapAkhir.png" type="image/png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f9f9f9;
    }

    a {
      text-decoration: none;
    }

    .custom-container {
      display: flex;
      height: 100vh;
    }

    .custom-image {
      width: 100%;
      height: auto;
      margin-bottom: 40px;
    }

    .custom-sidebar {
      width: 250px;
      background-color: #fff;
      padding: 20px 10px;
      border-right: 1px solid #000;
    }

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

    
 
    .custom-main-content {
      flex: 1;
      padding: 20px;
      background-image: url('Backround.png');
      background-repeat: no-repeat;
      background-position: bottom right;
      background-size: 1500px auto;
    }

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

.custom-breadcrumb {
  font-size: 1rem;
  margin-bottom: 15px;
  padding-bottom: 8px;
  border-bottom: 2px solid #ccc;
}

.breadcrumb-link {
  color: #2f80ed;
  text-decoration: none;
  font-weight: 500;
}

.breadcrumb-link:hover {
  text-decoration: underline;
}

.breadcrumb-current {
  color: #333;
}

/* ------------------------ SEARCH ------------------------ */
.search-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  margin-bottom: 1.25rem;
}

.search-wrapper {
  display: flex;
  flex-grow: 1;
  max-width: 100%;
}

.search-wrapper input {
  flex-grow: 1;
  padding: 0.625rem;
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  font-size: 0.875rem;
}

.search-wrapper .search-icon {
  background-color: #0d6efd;
  border: none;
  color: white;
  padding: 0rem 1.25rem;
  border-radius: 0.5rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 0.5rem;
}

    /* .custom-tabel-lap-akhir thead,
    .custom-tabel-lap-akhir th {
      background-color: rgb(224, 222, 222) !important;
    } */

    /* ------------------------ TABLE STYLING ------------------------ */
.table-container {
  margin-top: 20px;
  background: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
  background-color: white;
  border-radius: 5px;
  overflow: hidden;
}

th,
td {
  border: 1px solid #ccc;
  padding: 10px 12px;
  text-align: center;
  font-size: 0.95rem;
}

thead {
  background-color: #2f80ed;
  color: white;
}

tbody tr:hover {
  background-color: #e6f2ff;
  transition: background-color 0.3s ease;
}

/* ------------------------ BUTTONS & ACTIONS ------------------------ */
.icon-action {
  margin: 0 5px;
  cursor: pointer;
  font-size: 1.1rem;
  color: #0d6efd;
  transition: color 0.2s ease;
  text-decoration: none;
}

.icon-action:hover {
  color: #084298;
}

.delete-link {
  color: #dc3545;
}

.delete-link:hover {
  color: #a71d2a;
}

.btn-tambah {
  background: green;
  color: white;
  padding: 10px 16px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  transition: background 0.3s ease;
}

.btn-tambah:hover {
  background: #146c43;
}
  </style>
</head>
<body>
  <div class="custom-container">
    <aside class="custom-sidebar">
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
        <a class="nav-link" href="tabel_proposal_peneliti.html"><i class="fa fa-chart-line"></i>Laporan Kemajuan</a>
        <a class="nav-link" href="tabel_proposal_peneliti.html"><i class="fa fa-file-export"></i>Laporan Akhir</a>
      </nav>
    </aside>

    <main class="custom-main-content">
      <header class="custom-header">
        <div class="custom-profile">
          <span>Boy Wiliam (Peneliti) <i class="fa fa-envelope"></i><span class="custom-notification-dot"></span></span>
        </div>
      </header>

        <nav class="custom-breadcrumb mb-3">
          <a href="/Sweetiefox Album/muy/DashBoard/1.html" class="breadcrumb-link">Sistem Penelitian</a> /
          <span class="breadcrumb-current">Laporan Kemajuan</span>
        </nav>

      <!-- <div class="cari">
        <a href="create_lap_akhir.html" class="btn btn-success btn-sm rounded-2" style="width: 9%; height: 36px; font-size: 17px; font-weight: bold; background-color: rgb(25, 183, 25); display: flex; align-items: center;">
          <i class="bi bi-plus-circle me-2"></i> Tambah</a>
        <input type="text" class="form-control" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-secondary" type="button" style="background-color: rgb(63, 149, 247);"><i class="fa-solid fa-magnifying-glass" style="color: black;"></i></button>
      </div> -->

<!-- BAGIAN INI DIUBAH SESUAI TOMBOL DAN SEARCH TEMAN -->
<div class="search-container">
  <a href="create_lap_akhir.html" class="btn-tambah" id="btnTambahLaporan">+ Tambah</a>

  <div class="search-wrapper">
    <input type="text" id="searchInput" placeholder="Cari berdasarkan ID, Tanggal, atau Status...">
    <button id="searchButton" class="search-icon">
      <i class="bi bi-search"></i>
    </button>
  </div>
</div>


<div class="table-container">
  <h2>Laporan Akhir</h2> <!-- Tambahan judul agar konsisten dengan tabel teman -->

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>ID Proposal</th>
        <th>RAB</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>LA001</td>
        <td>PR001</td>
        <td>Rp 15.000.000</td>
        <td>03-Jun-2025</td>
        <td>Disetujui</td>
        <td>
          <a href="read_lap_akhir2.html" class="icon-action"><i class="bi bi-eye"></i></a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>LA002</td>
        <td>PR001</td>
        <td>Rp 15.000.000</td>
        <td>03-Jun-2025</td>
        <td>Dikirim</td>
        <td>
          <a href="read_lap_akhir.html" class="icon-action"><i class="bi bi-eye"></i></a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>LA003</td>
        <td>PR001</td>
        <td>Rp 15.000.000</td>
        <td>03-Jun-2025</td>
        <td>Revisi Minor</td>
        <td>
          <a href="create_lap_akhir.html" class="icon-action"><i class="bi bi-pencil-square"></i></a>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>LA004</td>
        <td>PR002</td>
        <td>Rp 10.500.000</td>
        <td>02-Jun-2025</td>
        <td>Draft</td>
        <td>
          <a href="read_lap_akhir.html" class="icon-action"><i class="bi bi-eye"></i></a>
          <a href="create_lap_akhir.html" class="icon-action"><i class="bi bi-pencil-square"></i></a>
          <button type="button" data-bs-toggle="modal" data-bs-target="#konfirmasiModal" style="border: none; background: none;" class="icon-action">
            <i class="bi bi-send"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </table>
      </div>

      <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Laporan Akhir</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">Apakah anda sudah yakin untuk mengirim Laporan Akhir Penelitian ini?</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
            </div>
          </div>
        </div>
      </div>

      <nav aria-label="...">
        <ul class="pagination" style="padding-top: 15px;">
          <li class="page-item"><a class="page-link">Sebelumnya</a></li>
          <li class="page-item active"><a class="page-link" href="#" aria-current="page">1</a></li>
          <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
        </ul>
      </nav>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
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