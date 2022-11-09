<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/update_pemasukan/<?= $pemasukan['id_pemasukan'] ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pemasukan" class="form-label">tanggal</label>
            <input type="date" name="tanggal_pemasukan" class="form-control" id="tanggal_pemasukan" value="<?= $pemasukan['tanggal_pemasukan'] ?>">
        </div>    
        <div class="mb-3">
            <label for="jumlah_pemasukan" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan" value="<?= $pemasukan['jumlah_pemasukan'] ?>">
        </div>
        <div class="mb-3">
            <label for="cashier_id" class="form-label">Nama Kasir</label>
            <input type="text" name="cashier_id" class="form-control" id="cashier_id" value="<?= $pemasukan['cashier_id'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>