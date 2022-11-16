<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/update_pengeluaran/<?= $pengeluaran[0]->id_pengeluaran ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pengeluaran" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_pengeluaran" class="form-control" id="tanggal_pengeluaran" value="<?= $pengeluaran[0]->tanggal_pengeluaran ?>">
        </div>    
        <div class="mb-3">
            <label for="jumlah_pengeluaran" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran" value="<?= $pengeluaran[0]->jumlah_pengeluaran ?>">
        </div>
        <div class="mb-3">
            <label for="ket_pengeluaran" class="form-label">Keterangan</label>
            <textarea type="text" name="ket_pengeluaran" class="form-control" id="ket_pengeluaran"><?=  $pengeluaran[0]->ket_pengeluaran ?></textarea>
        </div>
        <div class="mb-3">
            <label for="bukti_pengeluaran" class="form-label">Bukti Pengeluaran</label>
            <input type="text" name="bukti_pengeluaran" class="form-control" id="bukti_pengeluaran" value="<?= $pengeluaran[0]->bukti_pengeluaran ?>">
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-label">Nama Petugas</label>
            <input type="text" name="employee_id" class="form-control" id="employee_id" value="<?= $pengeluaran[0]->username ?>" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>