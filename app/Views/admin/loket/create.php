<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h4>Tambah Loket</h4>
    <hr>
    <form action="<?php echo base_url('loket/store'); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Loket</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Keterangan">
        </div>
        <div class="form-group">
            <label for="">Jenis Layanan</label>
            <select name="pelayanan_id" class="form-control" placeholder="Jenis Pelayanan">>
                <?php
                foreach ($pelayanan as $key => $data) { ?>
                    <option value="<?php echo $data['id']; ?>">
                        <?php echo $data['nama']; ?> </option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group">
            <label for="">Keterangan Loket</label>
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Loket">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>