<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Edit Pelajaran -->
<h1 class="h3 mb-2 text-gray-800">Edit Pelajaran</h1>
<p class="mb-4">Edit data pelajaran SMA Tiga Kuningan.</p>

<form action="<?= base_url('pelajaran/update/' . $pelajaran['id']) ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pelajaran['nama'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- Akhir Konten Form Edit Pelajaran -->
<?= $this->endSection() ?>
