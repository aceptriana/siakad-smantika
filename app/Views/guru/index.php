<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Konten Tabel Guru -->
<h1 class="h3 mb-2 text-gray-800">Data Guru</h1>
<p class="mb-4">Daftar guru SMAN 3 Kuningan.</p>

<a href="<?= base_url('guru/create') ?>" class="btn btn-primary mb-3">Tambah Guru</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($guru as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['mata_pelajaran'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                    <a href="<?= base_url('guru/edit/' . $row['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= base_url('guru/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>    
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- Akhir Konten Tabel Guru -->
<?= $this->endSection() ?>
