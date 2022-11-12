<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <!-- <a href="/create_pemasukan" type="button" class="btn btn-primary mb-3">Tambah</a> -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Paket Layanan</th>
                <th scope="col">Berat (Kg)</th>
                <th scope="col">Delivery</th>
                <th scope="col">Total Tagihan</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($nota as $nt) : ?>
            <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $nt->nama_pelanggan ?></td>
                <td><?= $nt->paket_layanan ?></td>
                <td><?= $nt->berat_orderan?></td>
                <td><?= $nt->delivery?></td>
                <td><?= $nt->jumlah_pemasukan?></td>
                <td><?= $nt->created_at?></td>
                <td><?= $nt->status_order?></td>
                
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit_pemasukan/<?= $nt->id_orderan ?>">Edit</a>
                        <form action="/delete_pemasukan/<?= $nt->id_orderan ?>" method="post">
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