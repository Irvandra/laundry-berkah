<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="/update_pengeluaran/<?= $pengeluaran['id_pengeluaran'] ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pengeluaran" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_pengeluaran" class="form-control" id="tanggal_pengeluaran" value="<?= $pengeluaran['tanggal_pengeluaran'] ?>">
        </div>    
        <div class="mb-3">
            <label for="jumlah_pengeluaran" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran" value="<?= $pengeluaran['jumlah_pengeluaran'] ?>">
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-label">Nama Petugas</label>
            <input type="text" name="employee_id" class="form-control" id="employee_id" value="<?= $pengeluaran['employee_id'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>