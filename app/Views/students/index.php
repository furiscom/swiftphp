<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstraZenith - Daftar Siswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (optional, for JavaScript features) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Konten HTML lainnya di sini -->
    <div class="container mt-5">
    <!-- app/Views/student/index.php -->

<h1>Daftar Siswa</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>NISN</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student['id']) ?></td>
                <td><?= htmlspecialchars($student['nama_lengkap']) ?></td>
                <td><?= htmlspecialchars($student['nisn']) ?></td>
                <td>
                    <a href="/students/<?= $student['id'] ?>" class="btn btn-info btn-sm">Lihat</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


        <!-- Masukkan kode tabel daftar siswa di sini -->
    </div>

    <!-- Bootstrap JS (optional, untuk interaksi lebih lanjut) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
