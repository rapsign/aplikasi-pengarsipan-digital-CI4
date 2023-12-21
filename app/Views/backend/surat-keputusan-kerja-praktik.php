<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<section class="content-header">
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success text-center" style="background-color:#6c2bab;" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>
  <div class="card border mb-5 ">
    <div class="container-fluid">
      <div class="row p-3">
        <div class="col-sm-6">
          <?php if (allow('3')) : ?>
            <button type="button" class="btn btn-sm text-white" style="background-color:#6c2bab;" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Tambah File
            </button>
          <?php endif; ?>
        </div>
        <div class="col-sm-6">
          <?php if (allow('3')) : ?>
            <div class="hidden-mobile">
            <?php endif; ?>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Dashboard</li>
              <li class="breadcrumb-item active">Surat Keputusan Kerja Praktik</li>
            </ol>
            <?php if (allow('3')) : ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <table class="table table-bordered table-striped table-hover" id="example2">
    <thead>
      <tr>
        <th class="text-center" style="color:#8B45A9;">Nama File</th>
        <th class="text-center" style="color:#8B45A9;">Tahun</th>
        <th class="text-center" style="color:#8B45A9;">File Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($p as $file) : ?>
        <tr>
          <td class="text-center"><?= $file->nama_file; ?></td>
          <td class="text-center"><?= $file->tahun; ?></td>
          <td class="text-center">
            <div class="d-grid gap-2 d-md-block">
              <a href="<?= base_url('backend/view/' . $file->id); ?>" type="button" style="background-color:#8B45A9;" class="btn btn-sm text-white"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp; Lihat</a>
              <a href="<?= base_url('backend/download/' . $file->id); ?>" type="button" style="background-color:#8B45A9;" class="btn btn-sm text-white"><i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download</a>
              <?php if (allow('3')) : ?>
                <a href="<?= base_url('admin/delete/' . $file->id); ?>" type="button" class="btn btn-sm btn-danger text-white" onClick="return confirm('Apakah Anda Yakin?');"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp; Hapus</a>
              <?php endif; ?>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= base_url('admin/save') ?>" method="post" enctype="multipart/form-data">
          <?= csrf_field() ?>
          <div class="form-group">
            <label for="nama">Nama File</label>
            <input type="text" class="form-control" id="nama_file" name="nama_file" required>
          </div>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control " id="tahun" name="tahun" required>
          </div>
          <div class="form-group">
            <input type="file" class="form-control-file" id="file" name="berkas">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn text-white" style="background-color:#6c2bab;">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>