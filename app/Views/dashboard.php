<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="ml-4 mr-4 mb-4">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $nota->count_order ?></h3>
              <p>Orders</p>
            </div>
            <div class="icon" style="z-index: 1">
              <i class="bi bi-bag"></i>
            </div>
            <a href="/nota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $pemasukan->count_pemasukan ?></h3>
              <p>Pemasukan</p>
            </div>
            <div class="icon">
              <i class="bi bi-arrow-down"></i>
            </div>
            <a href="/pemasukan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $pengeluaran->count_pengeluaran ?></h3>
              <p>Pengeluaran</p>
            </div>
            <div class="icon">
              <i class="bi bi-arrow-up"></i>
            </div>
            <a href="/pengeluaran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Rp. <?= $saldo ?></h3>
              <p>Saldo</p>
            </div>
            <div class="icon">
              <i class="bi bi-cash-coin"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>