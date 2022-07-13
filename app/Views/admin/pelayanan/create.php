<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h4>Tambah Pelayanan</h4>
    <hr>
    <form action="<?php echo base_url('pelayanan/store'); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Pelayanan</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Pelayanan">
        </div>
        <div class="form-group">
            <label for="">Kode Pelayanan</label>
            <input type="text" name="kode" class="form-control" placeholder="Kode Pelayanan">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Pelayanan</label>
            <textarea name="keterangan" class="form-control" placeholder="Deskripsi pelayanan"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>