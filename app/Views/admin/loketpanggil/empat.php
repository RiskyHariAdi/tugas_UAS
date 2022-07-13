<?php foreach ($antrian4 as $key => $data4) {
    $aa = $data4["id"];
} ?>
<?php foreach ($antrian5 as $key => $data5) {
    $bb = $data5["id"];
} ?>
<?php foreach ($antrian6 as $key => $data6) {
    $cc = $data6["id"];
} ?>
<?php foreach ($antrian7 as $key => $data7) {
    $dd = $data7["id"];
} ?>


<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container pb-5">

    <?php if (!empty(session()->getFlashdata("success"))) { ?>

        <div class="alert alert-success">
            <?php echo session()->getFlashdata("success"); ?>
        </div>

    <?php } ?>
    <?php if (!empty(session()->getFlashdata("info"))) { ?>

        <div class="alert alert-info">
            <?php echo session()->getFlashdata("info"); ?>
        </div>

    <?php } ?>

    <?php if (!empty(session()->getFlashdata("warning"))) { ?>

        <div class="alert alert-warning">
            <?php echo session()->getFlashdata("warning"); ?>
        </div>

    <?php } ?>

    <!-- Begin Page Content -->
    <div id="loket4">

        <!-- Page Heading -->
        <div class="col-12">
            Pelayanan Loket 4 (Perpanjangan)
        </div>

        <div class="card">
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-dilayani">
                            <div class="dilayani">
                                <h5>Sedang Dilayani</h5>
                                <p>D<?php echo $dd; ?></p>
                            </div>
                            <?php if (is_numeric($dd)) {
                                echo "<a href='" .
                                    base_url("loketpanggil/edit/" . $dd) .
                                    "' class='btn btn-lg col-11 btn-warning'>Selesai</a>";
                            } else {
                                echo "<a class='btn btn-lg col-11 btn-danger'>Tidak ada antrian</a>";
                            } ?>
                        </div>
                        <div class="daftar">
                            <h4>Daftar Antrian Selanjutnya</h4>
                            <table class="table" border="1" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No Antrian</th>
                                        <th>Panggil</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>D<?php echo $dd; ?></td>
                                        <td>
                                            <?php if (is_numeric($dd)) {
                                                echo "<a href='' class='btn btn-sm col-11 btn-success'>Panggil</a>";
                                            } else {
                                                echo "<a class='btn btn-sm col-11 btn-danger'>kosong</a>";
                                            } ?>
                                        </td>
                                        <td>Ada</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->


    <!-- End of Main Content -->
    <?= $this->endSection(); ?>