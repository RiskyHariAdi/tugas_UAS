<?= $this->extend('/layouts/tempelate'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <main>
    <section class="mb-4">
      <div class="container">
        <div class="hero-inner">
          <div class="hero-copy">
            <div class="card text-center bg-light">
              <div class="card-body bg-warning">
                <h1 style="text-align: center;">Menu Antrian</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2">
        <?php foreach ($pelayanan->getResultArray() as $row) : ?>
          <div class="col mb-4">
            <div class="card bg-primary mb-3">
              <a style="color:white; text-decoration:none; text-align:center;" href="
              <?php echo base_url(); ?>/antrian/<?= $row['kode']; ?>/<?= $row['id']; ?>">
                <div class="card-body" style="text-align: center; font-weight: bold;"></div>
                <div class="card-body">
                  <h1 class="card-title"><?= $row['nama']; ?></h1>
                </div>
                <div class="card-body" style="text-align: center; font-weight: bold;"></div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </main>
  <?= $this->endSection(); ?>