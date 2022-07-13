<?= $this->extend('/layouts/tempelate-antrian'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="body-wrap boxed-container">
    <?php foreach ($antrian as $key => $data) {
      $a = $data["id"];
    } ?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-inner">
            <div class="hero-copy">
              <br>
              <div class="container">
                <div class="card text-center">
                  <div class="card-header bg-primary"> NOMOR ANTRIAN </div>
                  <div class="card-body">
                    <h1 class="hero-paragraph is-revealing">
                      <?php
                      $request = \Config\Services::request();
                      $s = $request->uri->getSegment(3);
                      if ($s == "4") {
                        echo "A" .
                          $a;
                      } elseif ($s == "5") {
                        echo "B" .
                          $a;
                      } elseif ($s == "6") {
                        echo "C" .
                          $a;
                      } elseif ($s == "7") {
                        echo "D" .
                          $a;
                      }
                      ?> </h1>
                    <h3>Akan tercetak otomatis . . . </h3>
                  </div>
                </div>
              </div>
              <p class="hero-cta is-revealing">
                <a class="button button-primary button-shadow" href="#">.</a>
              </p>
            </div>
            <div class="container mt-5 mb-5 text-center"></div>
            <!-- <div class="container">
            <?php if (!empty(session()->getFlashdata("success"))) { ?><div class="alert alert-success">
            <?php echo session()->getFlashdata("success"); ?></div>
            <?php } ?>
            <?php if (!empty(session()->getFlashdata("info"))) { ?><div class="alert alert-info">
            <?php echo session()->getFlashdata("info"); ?></div>
            <?php } ?>
            <?php if (!empty(session()->getFlashdata("warning"))) { ?><div class="alert alert-warning">
            <?php echo session()->getFlashdata("warning"); ?></div>
            <?php } ?></div> -->
          </div>
        </div>
      </section>
    </main>
  </div>
  <script src="<?php echo base_url("dist/js/main.min.js"); ?>">
  </script>
</div> <?= $this->endSection(); ?>