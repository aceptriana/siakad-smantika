<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Create Pelajaran -->
<h1 class="h3 mb-2 text-gray-800">Tambah Pelajaran</h1>
<p class="mb-4">Tambah data pelajaran SMA Tiga Kuningan.</p>

<form action="<?= base_url('pelajaran/store') ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<!-- Akhir Konten Form Create Pelajaran -->
<?= $this->endSection() ?>
