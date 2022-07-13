<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- My Style -->
  <link href="<?php echo base_url('assets/css/style.css'); ?> " rel="stylesheet">

  <!-- BOOTSTRAP /-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
    setTimeout(function() {
      window.location.href = '<?php echo base_url("/antrian"); ?>'
    }, 2000);
  </script>
  <title>Ambil Antrian</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-clock"></i>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="/antrian">Ambil antrian</a>
          <a class="nav-link" href="/antrianno">Layar antrian</a>
          <a class="nav-link" href="/loketpanggil">Loket Panggil</a>
          <a class="nav-link" href="/loket">Loket</a>
          <a class="nav-link" href="/pelayanan">Pelayanan</a>
        </div>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content'); ?>

  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>