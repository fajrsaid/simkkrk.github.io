<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Pengajuan Barang</title>
    <?php $this->load->view("_partials/header.php") ?>
  </head>

  <body id="page-top">

    <?php $this->load->view("_partials/navbar.php", $this->data) ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view("_partials/sidebar.php") ?>

      <div id="content-wrapper">

        <div class="container-fluid">


        <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <html>
<div class="card mb-3">
                      <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Lab</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Update</th>
                                        <th>File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($peminjaman as $peminjaman): ?>
                                    <tr>
                                        <td width="0">
                                            <?php echo $peminjaman->nama_mahasiswa?>
                                        </td>
                                        <td>
                                          <?php echo $peminjaman->nim ?>
                                        </td>
                                        <td>
                                            <?php echo $peminjaman->nama_laboratorium?>
                                        </td>
                                        <td>
                                            <?php echo $peminjaman->tanggal_peminjaman ?> - <?php echo $peminjaman->tanggal_kembali ?>
                                        </td>
                                        <td>
                                            <?php echo $peminjaman->tanggal_update ?>
                                        </td>
                                         <td>
                                          <a href="<?php print site_url('/assets/documents/laporan_peminjaman/'.$peminjaman->file_peminjaman) ?>" target="blank">
                                             <?= $peminjaman->file_peminjaman  ?>
                                          </a>
                                        </td>

                                            <td width="250">
                                            <a href="<?php echo base_url('mahasiswa/editpinjam/'.$peminjaman->pinjam_id) ?>"
                                             class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('')"
                                             href='<?php echo base_url('peminjaman/hapus/'.$peminjaman->pinjam_id) ?>' class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                  </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
</html>
          <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url() ?>index.php/dosen/logout"   >Logout</a>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view("_partials/js.php") ?>
  </body>

</html>
