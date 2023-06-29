<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Form Edit Staf Tata Usaha -->
<h1 class="h3 mb-2 text-gray-800">Edit Staf Tata Usaha</h1>
<p class="mb-4">Edit data staf tata usaha SMA Tiga Kuningan.</p>

<form action="<?= base_url('staftatausaha/update/' . $staf_tata_usaha['id']) ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $staf_tata_usaha['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $staf_tata_usaha['jabatan'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $staf_tata_usaha['alamat'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<!-- Akhir Konten Form Edit Staf Tata Usaha -->
<?= $this->endSection() ?>
