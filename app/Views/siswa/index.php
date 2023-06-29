<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Tabel -->
<h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
<p class="mb-4">Daftar siswa SMAN 3 Kuningan.</p>

<a href="<?= base_url('siswa/create') ?>" class="btn btn-primary mb-3">Tambah Siswa</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="<?= base_url('siswa/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('siswa/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir Konten Tabel -->
<?= $this->endSection() ?>
