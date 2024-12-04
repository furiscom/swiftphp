<!-- app/Views/student/show.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2>Detail Siswa</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($student['nama_lengkap']) ?></p>
                    <p><strong>NISN:</strong> <?= htmlspecialchars($student['nisn']) ?></p>
                    <p><strong>NIK:</strong> <?= htmlspecialchars($student['nik']) ?></p>
                    <p><strong>Tempat Lahir:</strong> <?= htmlspecialchars($student['tempat_lahir']) ?></p>
                    <p><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($student['tanggal_lahir']) ?></p>
                    <p><strong>Tingkat Rombel:</strong> <?= htmlspecialchars($student['tingkat_rombel']) ?></p>
                </div>
                <?php // Fungsi untuk menghitung umur 
                function hitungUmur($tanggal_lahir) { $tanggal_lahir = new DateTime($tanggal_lahir); $hari_ini = new DateTime(); $umur = $hari_ini->diff($tanggal_lahir); return $umur->y . ' tahun, ' . $umur->m . ' bulan'; } ?>
                <div class="col-md-6">
                    <p><strong>Umur:</strong> <?= htmlspecialchars(hitungUmur($student['tanggal_lahir'])) ?></p>
                    <p><strong>Status:</strong> <?= htmlspecialchars($student['status']) ?></p>
                    <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($student['jenis_kelamin']) ?></p>
                    <p><strong>Alamat:</strong> <?= htmlspecialchars($student['alamat']) ?></p>
                    <p><strong>No. Telepon:</strong> <?= htmlspecialchars($student['no_telepon']) ?></p>
                </div>
            </div>
            <hr>
            <h4>Informasi Tambahan</h4>
            <p><strong>Kebutuhan Khusus:</strong> <?= htmlspecialchars($student['kebutuhan_khusus']) ?></p>
            <p><strong>Disabilitas:</strong> <?= htmlspecialchars($student['disabilitas']) ?></p>
            <p><strong>Nomor KIP/PIP:</strong> <?= htmlspecialchars($student['nomor_kip/pip']) ?></p>
            <p><strong>Nama Ayah Kandung:</strong> <?= htmlspecialchars($student['nama_ayah_kandung']) ?></p>
            <p><strong>Nama Ibu Kandung:</strong> <?= htmlspecialchars($student['nama_ibu_kandung']) ?></p>
            <p><strong>Nama Wali:</strong> <?= htmlspecialchars($student['nama_wali']) ?></p>
        </div>
        <div class="card-footer text-end">
            <a href="/students" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script>
    // Jika Anda membutuhkan jQuery interaktivitas
    $(document).ready(function () {
        console.log("Halaman Detail Siswa siap!");
    });
</script>

</body>
</html>
