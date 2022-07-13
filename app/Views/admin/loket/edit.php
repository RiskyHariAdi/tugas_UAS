<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h4>Edit Loket</h4>
    <hr>
    <form action="<?php echo base_url('loket/update/' . $loket['id']); ?>" method="post">

        <div class="form-group">
            <label for="">Nama Loket</label>
            <input type="text" name="nama" value="<?php echo $loket['nama']; ?>" class="form-control" placeholder="Nama Loket">
        </div>
        <div class="form-group">
            <label for="">Jenis Loket</label>
            <select name="id" class="form-control" placeholder="Jenis Pelayanan">>
                <?php
                foreach ($pelayanan as $key => $data) { ?>
                    <option value="<?php echo $data['id']; ?>">
                        <?php echo $data['nama']; ?> </option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group">
            <label for="">Keterangan Loket</label>
            <input type="text" name="keterangan" value="<?php echo $loket['keterangan']; ?>" class="form-control" placeholder="Nama description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>