<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Create Staf Tata Usaha -->
<h1 class="h3 mb-2 text-gray-800">Tambah Staf Tata Usaha</h1>
<p class="mb-4">Tambah data staf tata usaha SMA Tiga Kuningan.</p>

<form action="<?= base_url('staftatausaha/store') ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
<!-- Akhir Konten Form Create Staf Tata Usaha -->
<?= $this->endSection() ?>
