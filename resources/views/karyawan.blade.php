<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JASAMEDIKA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .dark-mode {
      background-color: #121212 !important;
      color: #ffffff !important;
    }
    .dark-mode .card {
      background-color: #1f1f1f !important;
      border-color: #444;
    }
    .dark-mode .form-control,
    .dark-mode .form-select {
      background-color: #2c2c2c;
      color: #fff;
      border-color: #444;
    }
    .dark-mode .table {
      color: #fff;
    }
    .dark-mode .btn-close {
      filter: invert(1);
    }
    .theme-switch {
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 mb-4">
  <div class="container-fluid">
    <span class="navbar-brand fw-bold">JASAMEDIKA</span>
    <div class="ms-auto theme-switch text-white" onclick="toggleTheme()">
      <i class="bi bi-moon-stars-fill" id="theme-icon"></i>
      <span id="theme-label">Dark Mode</span>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-body">
      <h3 class="card-title text-center mb-4">{{ isset($karyawan) ? 'Edit Karyawan' : 'Input Data Karyawan' }}</h3>

      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            {{ session('success') }}
        </div>
      @endif

      
      <form action="{{ isset($karyawan) ? route('karyawan.update', $karyawan->id) : route('karyawan.store') }}" method="POST">
        @csrf
        @if(isset($karyawan))
          @method('POST')
        @endif
        
        <div class="row g-3">
          <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $karyawan->nama ?? '' }}" required>
          </div>

          <div class="col-md-6">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $karyawan->alamat ?? '' }}" required>
          </div>

          <div class="col-md-6">
            <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ isset($karyawan->tgl_lahir) ? \Carbon\Carbon::parse($karyawan->tgl_lahir)->format('Y-m-d') : '' }}" required>
          </div>

          <div class="col-md-6">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" class="form-select" required>
              <option value="">-- Pilih Agama --</option>
              <option value="Islam" {{ (isset($karyawan) && $karyawan->agama == 'Islam') ? 'selected' : '' }}>Islam</option>
              <option value="Kristen" {{ (isset($karyawan) && $karyawan->agama == 'Kristen') ? 'selected' : '' }}>Kristen</option>
              <option value="Hindu" {{ (isset($karyawan) && $karyawan->agama == 'Hindu') ? 'selected' : '' }}>Hindu</option>
              <option value="Budha" {{ (isset($karyawan) && $karyawan->agama == 'Budha') ? 'selected' : '' }}>Budha</option>
              <option value="Konghuchu" {{ (isset($karyawan) && $karyawan->agama == 'Konghuchu') ? 'selected' : '' }}>Konghuchu</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <select name="pendidikan" class="form-select" required>
              <option value="">-- Pilih Pendidikan --</option>
              <option value="SD" {{ (isset($karyawan) && $karyawan->pendidikan == 'SD') ? 'selected' : '' }}>SD</option>
              <option value="SMP" {{ (isset($karyawan) && $karyawan->pendidikan == 'SMP') ? 'selected' : '' }}>SMP</option>
              <option value="SMA/Sederajat" {{ (isset($karyawan) && $karyawan->pendidikan == 'SMA/Sederajat') ? 'selected' : '' }}>SMA/Sederajat</option>
              <option value="Diploma" {{ (isset($karyawan) && $karyawan->pendidikan == 'Diploma') ? 'selected' : '' }}>Diploma</option>
              <option value="Sarjana" {{ (isset($karyawan) && $karyawan->pendidikan == 'Sarjana') ? 'selected' : '' }}>Sarjana</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select name="jabatan" class="form-select" required>
              <option value="">-- Pilih Jabatan --</option>
              <option value="Direktur" {{ (isset($karyawan) && $karyawan->jabatan == 'Direktur') ? 'selected' : '' }}>Direktur</option>
              <option value="Manager" {{ (isset($karyawan) && $karyawan->jabatan == 'Manager') ? 'selected' : '' }}>Manager</option>
              <option value="HRD" {{ (isset($karyawan) && $karyawan->jabatan == 'HRD') ? 'selected' : '' }}>HRD</option>
              <option value="Keuangan" {{ (isset($karyawan) && $karyawan->jabatan == 'Keuangan') ? 'selected' : '' }}>Keuangan</option>
              <option value="Marketing" {{ (isset($karyawan) && $karyawan->jabatan == 'Marketing') ? 'selected' : '' }}>Marketing</option>
              <option value="Koordinator" {{ (isset($karyawan) && $karyawan->jabatan == 'Koordinator') ? 'selected' : '' }}>Koordinator</option>
              <option value="Programmer" {{ (isset($karyawan) && $karyawan->jabatan == 'Programmer') ? 'selected' : '' }}>Programmer</option>
              <option value="Implementator" {{ (isset($karyawan) && $karyawan->jabatan == 'Implementator') ? 'selected' : '' }}>Implementator</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="statuspernikahan" class="form-label">Status Pernikahan</label>
            <select name="statuspernikahan" class="form-select" required>
              <option value="">-- Pilih Status --</option>
              <option value="Menikah" {{ (isset($karyawan) && $karyawan->statuspernikahan == 'Menikah') ? 'selected' : '' }}>Menikah</option>
              <option value="Belum Menikah" {{ (isset($karyawan) && $karyawan->statuspernikahan == 'Belum Menikah') ? 'selected' : '' }}>Belum Menikah</option>
              <option value="Janda" {{ (isset($karyawan) && $karyawan->statuspernikahan == 'Janda') ? 'selected' : '' }}>Janda</option>
              <option value="Duda" {{ (isset($karyawan) && $karyawan->statuspernikahan == 'Duda') ? 'selected' : '' }}>Duda</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="etnis" class="form-label">Etnis</label>
            <select name="etnis" class="form-select" required>
              <option value="">-- Pilih Etnis --</option>
              <option value="Jawa" {{ (isset($karyawan) && $karyawan->etnis == 'Jawa') ? 'selected' : '' }}>Jawa</option>
              <option value="Sunda" {{ (isset($karyawan) && $karyawan->etnis == 'Sunda') ? 'selected' : '' }}>Sunda</option>
              <option value="Batak" {{ (isset($karyawan) && $karyawan->etnis == 'Batak') ? 'selected' : '' }}>Batak</option>
              <option value="Melayu" {{ (isset($karyawan) && $karyawan->etnis == 'Melayu') ? 'selected' : '' }}>Melayu</option>
            </select>
          </div>

          <div class="col-md-6 mt-3">
            <label class="form-label">Status Pegawai</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="statusaktif" id="statusAktif" value="1"
                {{ isset($karyawan) && $karyawan->statusaktif == 1 || !isset($karyawan) ? 'checked' : '' }} required>
              <label class="form-check-label" for="statusAktif">Aktif</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="statusaktif" id="statusTidakAktif" value="0"
                {{ isset($karyawan) && $karyawan->statusaktif == 0 ? 'checked' : '' }} required>
              <label class="form-check-label" for="statusTidakAktif">Tidak Aktif</label>
            </div>
           </div>

        </div>

        <div class="col-12 d-flex justify-content-between mt-3 gap-2">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary px-4 py-2">
              Kembali ke Dashboard
            </a>
            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow">
              {{ isset($karyawan) ? 'Update' : 'Simpan' }}
            </button>
        </div>
      </form>
    </div>
  </div>

  
  <div class="card shadow-sm mt-5">
    
        <div style="max-width: 400px; margin-left :16px;margin-top:10px; width: 100%;">
            <label for="searchNama" class="form-label fw-semibold">🔍 Cari Berdasarkan Nama</label>
            <input type="text" id="searchNama" class="form-control" placeholder="Ketik nama karyawan...">
        </div>
  

    <div class="card-body">
      <h4 class="card-title mb-3 text-center fw-bold">DATA PEGAWAI</h4>
        <div class="mb-1">
            <button class="btn btn-success" onclick="exportToExcel('karyawanTable')">
                📁 Export ke Excel
            </button>
        </div>
      @if($data->count() > 0)
      <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center" id="karyawanTable">
          <thead class="table-primary">
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Tgl Lahir</th>
              <th>Agama</th>
              <th>Pendidikan</th>
              <th>Jabatan</th>
              <th>Status Pernikahan</th>
              <th>Etnis</th>
              <!-- <th>Status Aktif</th> -->
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->tgl_lahir }}</td>
              <td>{{ $item->agama }}</td>
              <td>{{ $item->pendidikan }}</td>
              <td>{{ $item->jabatan }}</td>
              <td>{{ $item->statuspernikahan }}</td>
              <td>{{ $item->etnis }}</td>
              <!-- <td>{{ $item->statusaktif }}</td> -->
              <td>
                <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $item->id }}">Hapus</button>

    
                <div class="modal fade" id="confirmDeleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $item->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="modalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                      </div>
                      <div class="modal-body">
                        Apakah kamu yakin ingin menghapus data <strong>{{ $item->nama }}</strong>?
                      </div>
                      <div class="modal-footer">
                        <form action="{{ route('karyawan.destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button class="btn btn-sm btn-danger" data-bs-toggle="modal"><i class="bi bi-trash me-1"></i>Hapus</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @else
        <p class="text-muted">Belum ada data yang tersimpan.</p>
      @endif
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  setTimeout(function () {
    let alert = document.getElementById('success-alert');
    if (alert) {
      alert.classList.remove('show');
      alert.classList.add('fade');
      setTimeout(() => alert.remove(), 500);
    }
  }, 2000);
</script>

<script>
  document.getElementById('searchNama').addEventListener('keyup', function () {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll('table tbody tr');

    rows.forEach(row => {
      const namaCell = row.querySelector('td:nth-child(1)');
      const nama = namaCell ? namaCell.textContent.toLowerCase() : '';
      row.style.display = nama.includes(keyword) ? '' : 'none';
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<script>
  function exportToExcel(tableId) {
    const table = document.getElementById(tableId);
    const wb = XLSX.utils.table_to_book(table, { sheet: "DataKaryawan" });
    XLSX.writeFile(wb, "data_karyawan.xlsx");
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function toggleTheme() {
    const body = document.body;
    const html = document.documentElement;
    const themeIcon = document.getElementById('theme-icon');
    const themeLabel = document.getElementById('theme-label');
    const isDark = body.classList.toggle('dark-mode');
    
    html.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');

    themeIcon.className = isDark ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill';
    themeLabel.textContent = isDark ? 'Light Mode' : 'Dark Mode';
  }

  setTimeout(() => {
    let alert = document.getElementById('success-alert');
    if (alert) {
      alert.classList.remove('show');
      alert.classList.add('fade');
      setTimeout(() => alert.remove(), 500);
    }
  }, 2000);

  window.onload = function () {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') toggleTheme();
  };
</script>

</body>
</html>
