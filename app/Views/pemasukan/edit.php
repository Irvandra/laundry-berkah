<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="ml-4 mr-4 mb-4">
    <form action="/update_pemasukan/<?= $pemasukan[0]->id_pemasukan ?>" method="post">
        <div class="mb-3">
            <label for="tanggal_pemasukan" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_pemasukan" class="form-control" id="tanggal_pemasukan" value="<?= $pemasukan[0]->tanggal_pemasukan ?>">
        </div>    
        <div class="mb-3">
            <label for="jumlah_pemasukan" class="form-label">Jumlah</label>
            <input type="text" name="jumlah_pemasukan" class="form-control" id="jumlah_pemasukan" value="<?= $pemasukan[0]->jumlah_pemasukan ?>">
        </div>
        <div class="mb-3">
            <label for="ket_pemasukan" class="form-label">Keterangan</label>
            <textarea type="text" name="ket_pemasukan" class="form-control" id="ket_pemasukan"><?=  $pemasukan[0]->ket_pemasukan ?></textarea>
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-label">Kasir</label>
            <input type="text" name="employee_id" class="form-control" id="employee_id" value="<?=  $pemasukan[0]->username ?>" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>