<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .glass {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease-in-out;
    }

    .glass:hover {
      transform: scale(1.02);
    }

    h2, h5 {
      color: #fff;
    }

    .btn-glass {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: #fff;
      backdrop-filter: blur(8px);
    }

    .btn-glass:hover {
      background: rgba(255, 255, 255, 0.3);
      color: #000;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h1 class="text-center fw-bold mb-4">DASHBORAD PEGAWAI</h1>
  <h2 class="text-center fw-bold mb-4">JASAMEDIKA</h2>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="glass p-4 text-center">
        <h5>Total Karyawan</h5>
        <h2 class="fw-bold">{{ $totalKaryawan ?? 0 }}</h2>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass p-4 text-center">
        <h5>Pegawai Aktif</h5>
        <h2 class="fw-bold text-success">{{ $jumlahAktif ?? 0 }}</h2>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass p-4 text-center">
        <h5>Pegawai Tidak Aktif</h5>
        <h2 class="fw-bold text-danger">{{ $jumlahTidakAktif ?? 0 }}</h2>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="{{ route('karyawan.form') }}" class="btn btn-glass px-4 py-2 fw-semibold">
        ➕ Input Data Pegawai
    </a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
