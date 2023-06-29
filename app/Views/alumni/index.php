<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Tabel Alumni -->
<h1 class="h3 mb-2 text-gray-800">Data Alumni</h1>
<p class="mb-4">Daftar alumni SMAN 3 Kuningan.</p>

<a href="<?= base_url('alumni/create') ?>" class="btn btn-primary mb-3">Tambah Alumni</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tahun Lulus</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alumni as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tahun_lulus'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="<?= base_url('alumni/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('alumni/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir Konten Tabel Alumni -->
<?= $this->endSection() ?>
