<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ADD PEGAWAI</h1>
                </div><!-- /.col -->
            </div>
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- Tabel Jadwal -->
            <div class="row">
                <div class="col-12">
                    <!-- Body Tabel -->
                    <div class="card">
                        <div class="card-body">
                            <?php
                            //create form
                            $attributes = array('id' => 'FrmAddPegawai', 'method' => "post", "autocomplete" => "off");
                            echo form_open('', $attributes);
                            ?>
                            <label for="nama">NAMA PEGAWAI</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama pegawai" value="<?= set_value('nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                            <label for="nip" class="mt-2">NIP PEGAWAI</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="<?= set_value('nip'); ?>" placeholder="NIP pegawai">
                            <small class="text-danger">
                                <?php echo form_error('nip') ?>
                            </small>
                            <label for="poli" class="mt-2">POLI / KLINIK</label>
                            <select name="poli" id="poli" class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option selected disabled>Pilih poli</option>
                            <?php foreach ($data_poli as $poli) : ?>
                                <option value="<?= $poli->poli_id ?>" <?php if (set_value('poli') == $poli->poli_nama) : echo "selected"; endif; ?>><?= $poli->poli_nama ?></option>
                            <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('poli') ?>
                            </small>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-danger float-left">Back</button>
                            <button class="btn btn-primary float-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
        <strong>Dibuat oleh Achmad Dandi</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
</body>
</html>