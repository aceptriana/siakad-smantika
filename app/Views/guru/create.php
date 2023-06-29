<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Create Guru -->
<h1 class="h3 mb-2 text-gray-800">Tambah Guru</h1>
<p class="mb-4">Tambah data guru SMA Tiga Kuningan.</p>

<form action="<?= base_url('guru/store') ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<!-- Akhir Konten Form Create Guru -->
<?= $this->endSection() ?>
