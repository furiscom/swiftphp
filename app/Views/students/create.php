<h1>Tambah Siswa Baru</h1>
<form action="/students/store" method="POST">
    <label>Nama Lengkap: </label>
    <input type="text" name="nama_lengkap"><br>
    <label>NIS: </label>
    <input type="text" name="nis"><br>
    <label>NIK: </label>
    <input type="text" name="nik"><br>
    <label>Tanggal Lahir: </label>
    <input type="date" name="tanggal_lahir"><br>
    <label>Alamat: </label>
    <textarea name="alamat"></textarea><br>
    <button type="submit">Simpan</button>
</form>
