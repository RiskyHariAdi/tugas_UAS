<?= $this->extend('/layouts/tempelate-admin'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <?php
  if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success">
      <?php echo session()->getFlashdata('success'); ?> </div>
  <?php } ?> <?php if (!empty(session()->getFlashdata('info'))) { ?>
    <div class="alert alert-info"> <?php echo session()->getFlashdata('info'); ?>
    </div> <?php } ?>
  <?php if (!empty(session()->getFlashdata('warning'))) { ?>
    <div class="alert alert-warning"> <?php echo session()->getFlashdata('warning'); ?>
    </div>
  <?php } ?>
  <?php if (!empty(session()->getFlashdata('danger'))) { ?>
    <div class="alert alert-danger"> <?php echo session()->getFlashdata('danger'); ?>
    </div>
  <?php } ?>
</div>
<div class="container">
  <a href="
        <?php echo base_url('pelayanan/create'); ?>" class="btn btn-success float-right mb-3">Tambah Pelayanan </a>
  <h4>Pelayanan</h4>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <th>No</th>
        <th>Name</th>
        <th>Kode</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php foreach ($pelayanan as $key => $data) { ?>
          <tr>
            <td> <?php echo $key + 1; ?> </td>
            <td> <?php echo $data['nama']; ?> </td>
            <td> <?php echo $data['kode']; ?> </td>
            <td> <?php echo $data['keterangan']; ?> </td>
            <td>
              <div class="btn-group">
                <a href="<?php echo base_url('pelayanan/edit/' . $data['id']); ?>" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a> &emsp; <a href="<?php echo base_url('pelayanan/delete/' . $data['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelayanan <?php echo $data['nama']; ?> ini?')">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection(); ?>