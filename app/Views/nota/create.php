<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="p-4">
    <!-- halaman tambah nota -->
    <form action="/store_nota" method="post">
        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
        </div>
        <!-- <div class="mb-3">
            <label for="jenis_pemasukan" class="form-label">Paket Layanan</label>
            <select class="custom-select" id="jenis_pemasukan">
                <option selected>Pilih Paket Layanan...</option>
                <option value="1">Cuci Sepatu</option>
                <option value="2">Cuci Setrika</option>
                <option value="3">Cuci </option>
            </select>
        </div> -->
        <div class="mb-3">
            <label for="berat_orderan" class="form-label">Berat(Kg)</label>
            <input type="text" name="berat_orderan" class="form-control" id="berat_orderan">
        </div>

        <!-- <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="delivery">
            <label class="custom-control-label" for="delivery">Delivery</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>
        <?= $this->endSection() ?>