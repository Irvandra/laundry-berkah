<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/create_pemasukan" type="button" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Pemasukan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kasir</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($pemasukan as $masuk) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $masuk->id_pemasukan ?></td>
                    <td><?= $masuk->tanggal_pemasukan ?></td>
                    <td><?= $masuk->jumlah_pemasukan ?></td>                    
                    <td><?= $masuk->username ?></td>
                    <td><?= $masuk->ket_pemasukan ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/edit_pemasukan/<?= $masuk->id_pemasukan ?>">Edit</a>
                            <form action="/delete_pemasukan/<?= $masuk->id_pemasukan ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
<div>
<?= $this->endSection() ?>