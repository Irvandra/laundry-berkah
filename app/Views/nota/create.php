<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <!-- halaman tambah nota -->
    <form action="/store_nota" method="post">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
        </div>
        <div class="mb-3">
            <label for="berat_order" class="form-label">Berat(Kg)</label>
            <input type="text" name="berat_order" class="form-control" id="berat_order">
        </div>
        <div class="mb-3">
            <label for="tanggal_order" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_order" class="form-control" id="tanggal_order">
        </div>
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="delivery">
            <label class="custom-control-label" for="delivery">Delivery</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div>
<?= $this->endSection() ?>