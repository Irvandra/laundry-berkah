<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="ml-4 mr-4 mb-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Nota Order</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <a href="/create_nota" type="button" class="btn btn-primary mb-3"><i class="bi bi-plus-square mr-2"></i>Tambah</a>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Berat (Kg)</th>
                        <th scope="col">Total Tagihan (Rp)</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($nota as $nt) : ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $nt['nama_pelanggan'] ?></td>
                            <td><?= $nt['berat_order'] ?></td>
                            <td><?= $nt['total_tagihan'] ?></td>
                            <td><?= $nt['tanggal_order'] ?></td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-warning mr-3" href="/edit_nota/<?= $nt['id_order'] ?>"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/delete_nota/<?= $nt['id_order'] ?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>