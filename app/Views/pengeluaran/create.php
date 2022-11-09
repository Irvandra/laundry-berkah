<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <form action="<?= base_url('/store_pengeluaran') ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pengeluaran" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_pengeluaran" class="form-control" id="tanggal_pengeluaran">
        </div>
        <div class="mb-3">
            <label for="jumlah_pengeluaran" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pengeluaran" class="form-control" id="jumlah_pengeluaran">
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-label">Nama Petugas</label>
            <select name="employee_id" class="form-control" aria-label="Default select example">
                <option selected>Pilih Nama Petugas</option>
                <?php $no = 1; foreach($users as $u) : ?>
                    <option value = <?= $u['id'] ?>><?= $u['username'] ?></option>
                <?php $no++; endforeach;?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>