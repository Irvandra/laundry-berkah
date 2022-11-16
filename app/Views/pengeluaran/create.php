<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="<?= base_url('/store_pengeluaran') ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pengeluaran" class="form-label">Tanggal Transaksi</label>
            <input type="date" name="tanggal_pengeluaran" class="form-control" id="tanggal_pengeluaran">
        </div>
        <div class="mb-3">
            <label for="jumlah_pengeluaran" class="form-label">Jumlah Pengeluaran</label>
            <input type="text" name="jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran">
        </div>
        <div class="mb-3">
            <label for="ket_pengeluaran" class="form-label">Keterangan</label>
            <textarea type="paragraph" name="ket_pengeluaran" class="form-control" id="ket_pengeluaran"></textarea>
        </div>
        <div class="mb-3">
            <label for="bukti_pengeluaran" class="form-label">Bukti Pengeluaran</label>
            <input type="text" name="bukti_pengeluaran" class="form-control" id="bukti_pengeluaran">
        </div>
        <div class="mb-3">
            <input type="hidden" name="employee_id" class="form-control" id="employee_id" value="<?= user_id() ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>