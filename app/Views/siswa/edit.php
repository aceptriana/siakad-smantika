<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Edit Siswa -->
<h1 class="h3 mb-2 text-gray-800">Edit Siswa</h1>
<p class="mb-4">Edit data siswa.</p>

<form action="<?= base_url('siswa/update/' . $siswa['id']) ?>" method="POST">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?= $siswa['alamat'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<!-- Akhir Konten Form Edit Siswa -->
<?= $this->endSection() ?>
