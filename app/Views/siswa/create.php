<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Tambah Siswa -->
<h1 class="h3 mb-2 text-gray-800">Tambah Siswa</h1>
<p class="mb-4">Tambahkan data siswa baru.</p>

<form action="<?= base_url('siswa/store') ?>" method="POST">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- Akhir Konten Form Tambah Siswa -->
<?= $this->endSection() ?>
