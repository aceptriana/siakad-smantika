<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Tabel Pelajaran -->
<h1 class="h3 mb-2 text-gray-800">Data Pelajaran</h1>
<p class="mb-4">Daftar pelajaran SMAN 3 Kuningan.</p>

<a href="<?= base_url('pelajaran/create') ?>" class="btn btn-primary mb-3">Tambah Pelajaran</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pelajaran as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td>
                    <a href="<?= base_url('pelajaran/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('pelajaran/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir Konten Tabel Pelajaran -->
<?= $this->endSection() ?>
