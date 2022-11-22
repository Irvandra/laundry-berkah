<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <a href="/create_pengeluaran" type="button" class="btn btn-primary mb-3"><i class="bi bi-plus-square mr-2"></i>Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pengeluaran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah (Rp)</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Bukti Pengeluaran</th>
                <th scope="col">Petugas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($pengeluaran as $keluar) : ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $keluar->id_pengeluaran ?></td>
                    <td><?= $keluar->tanggal_pengeluaran ?></td>
                    <td><?= $keluar->jumlah_pengeluaran ?></td>
                    <td><?= $keluar->ket_pengeluaran ?></td>
                    <td><?= $keluar->bukti_pengeluaran ?></td>
                    <td><?= $keluar->username ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning mr-3" href="/edit_pengeluaran/<?= $keluar->id_pengeluaran ?>"><i class="bi bi-pencil-square"></i></a>
                            <form action="/delete_pengeluaran/<?= $keluar->id_pengeluaran ?>" method="post">
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
    <div>
        <?= $this->endSection() ?>