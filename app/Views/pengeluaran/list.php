<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/create_pengeluaran" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Pengelauran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($pengeluaran as $keluar) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $keluar['id_pengeluaran'] ?></td>
                <td><?= $keluar['tanggal_pengeluaran'] ?></td>
                <td><?= $keluar['jumlah_pengeluaran'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit_pengeluaran/<?= $keluar['id_pengeluaran'] ?>">Edit</a>
                        <form action="/delete_pengeluaran/<?= $keluar['id_pengeluaran'] ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php $no++; endforeach;?>
        </tbody>
    </table>
<div>
<?= $this->endSection() ?>