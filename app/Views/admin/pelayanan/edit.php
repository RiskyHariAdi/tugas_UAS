<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h4>Edit Pelayanan</h4>
    <hr>
    <form action="<?php echo base_url('pelayanan/update/' . $pelayanan['id']); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Pelayanan</label>
            <input type="text" name="nama" value="<?php echo $pelayanan['nama']; ?>" class="form-control" placeholder="Nama Pelayanan">
        </div>
        <div class="form-group">
            <label for="">Kode Pelayanan</label>
            <input type="text" name="kode" value="<?php echo $pelayanan['kode']; ?>" class="form-control" placeholder="Kode pelayanan">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Pelayanan</label>
            <textarea name="keterangan" class="form-control" placeholder="Deskripsi Pelayanan"><?php echo $pelayanan['keterangan']; ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>