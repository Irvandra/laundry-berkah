<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/create_nota" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Berat (Kg)</th>
                <th scope="col">Delivery</th>
                <th scope="col">Total Tagihan (Rp)</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($nota as $nt) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $nt['nama_pelanggan'] ?></td>
                <td><?= $nt['berat_order'] ?></td>
                <td><?= $nt['delivery'] ?></td>
                <td><?= $nt['total_tagihan'] ?></td>
                <td><?= $nt['tanggal_order'] ?></td>
                <td><?= $nt['status_order'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit_nota/<?= $nt['id_order'] ?>">Edit</a>
                        <form action="/delete_nota/<?= $nt['id_order'] ?>" method="post">
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