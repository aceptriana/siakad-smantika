<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Tabel Staf Tata Usaha -->
<h1 class="h3 mb-2 text-gray-800">Data Staf Tata Usaha</h1>
<p class="mb-4">Daftar staf tata usaha SMAN 3 Kuningan.</p>

<a href="<?= base_url('staftatausaha/create') ?>" class="btn btn-primary mb-3">Tambah Staf</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($staftatausaha as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jabatan'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="<?= base_url('staftatausaha/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('staftatausaha/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir Konten Tabel Staf Tata Usaha -->
<?= $this->endSection() ?>
