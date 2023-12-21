<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<section class="content-header">
  <div class="card border">
    <div class="container-fluid">
      <div class="row p-3">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
</section>

<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success text-center" style="background-color:#6c2bab;" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
<?php endif; ?>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="small-box" style="background-color:#D4CDD8;">
          <div class="inner">
            <h3><?= $total_data; ?></h3>
            <p>Surat Keputusan Kerja Praktik</p>
          </div>
          <div class="icon">
            <i class="fas fa-file"></i>
          </div>
          <a href="<?= base_url('backend'); ?>" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-4">
        <div class="small-box text-white" style="background-color:#8D948E;">
          <div class="inner">
            <h3>0</h3>
            <p>Surat Keputusan Laporan Akhir</p>
          </div>
          <div class="icon">
            <i class="fas fa-file"></i>
          </div>
          <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal1">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-4">
        <div class="small-box text-white" style="background-color:#8B45A9">
          <div class="inner">
            <h3>0</h3>
            <p>Surat Keputusan Mengajar</p>
          </div>
          <div class="icon">
            <i class="fas fa-file"></i>
          </div>
          <a href="#" class="small-box-footer" data-toggle="modal" data-target="#exampleModal1">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<?= $this->endSection(); ?>