<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Edit Guru -->
<h1 class="h3 mb-2 text-gray-800">Edit Guru</h1>
<p class="mb-4">Edit data guru SMA Tiga Kuningan.</p>

<form action="<?= base_url('guru/update/' . $guru['id']) ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?= $guru['mata_pelajaran'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $guru['alamat'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- Akhir Konten Form Edit Guru -->
<?= $this->endSection() ?>
