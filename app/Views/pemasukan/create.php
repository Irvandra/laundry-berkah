<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/store_pemasukan" method="post">
        <div class="mb-3">
            <label for="tanggal_pemasukan" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_pemasukan" class="form-control" id="tanggal_pemasukan">
        </div>
        <div class="mb-3">
            <label for="jumlah_pemasukan" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan">
        </div>
        <div class="mb-3">
            <input type="hidden" name="employee_id" class="form-control" id="employee_id" value="<?= user_id() ?>">
        </div>
        <div class="mb-3">
            <label for="ket_pemasukan" class="form-label">Keterangan</label>
            <input type="text" name="ket_pemasukan" class="form-control" id="ket_pemasukan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>