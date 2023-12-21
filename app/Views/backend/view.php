<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<section class="content-header">
</section>
<section class="content" style="min-height: 1000vh;">
  <div class="card text-center">
    <div class="card-body">
      <?php foreach ($p as $file) : ?>
        <iframe type="application/pdf" src="<?= base_url() ?>/file/<?= $file->berkas ?>" width="1000" height="500">
        </iframe>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>