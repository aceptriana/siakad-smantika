<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Edit Alumni -->
<h1 class="h3 mb-2 text-gray-800">Edit Alumni</h1>
<p class="mb-4">Edit data alumni SMA Tiga Kuningan.</p>

<form action="<?= base_url('alumni/update/' . $alumni['id']) ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $alumni['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tahun_lulus">Tahun Lulus</label>
        <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?= $alumni['tahun_lulus'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alumni['alamat'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- Akhir Konten Form Edit Alumni -->
<?= $this->endSection() ?>
