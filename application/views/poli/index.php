    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA POLI</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>poli/add" class="btn btn-primary">
                        Add Poli
                        </a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row mb-2">
                <?php if ($this->session->flashdata('message')) :
                        echo $this->session->flashdata('message');
                    endif; ?>
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
                            <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                            <?php if ($this->session->flashdata('message')) :
                                echo $this->session->flashdata('message');
                            endif; ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tablePGW">
                                    <thead class="text-center">
                                        <tr class="table-success">
                                            <th>No</th>
                                            <th>NAMA POLI</th>
                                            <th>DIBUAT PADA</th>
                                            <th>DIUBAH PADA</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($data_poli as $row) : ?>
                                            <tr>
                                                <td class="text-center"><?= $i++ ?></td>
                                                <td><?= $row->poli_nama ?></td>
                                                <td><?= $row->poli_created_at ?></td>
                                                <td><?= $row->poli_updated_at ?></td>
                                                <td class="text-center">
                                                    <a href="<?= site_url('poli/edit/' . $row->poli_id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                                    <a href="#myModal" class="trash btn btn-danger btn-sm" data-id="<?= $row->poli_id ?>" role="button" data-toggle="modal"><i class="fa fa-trash"></i></a>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Modal Delete -->
    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p class="error-text"><i class="fa fa-warning modal-icon"></i>Apakah anda yakin untuk menghapus ini?</p>
                </div>
                <div class="modal-footer">
                <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Cancel</button> <a href="#" class="btn btn-danger"  id="modalDelete" >Delete</a>
                </div>
            </div>
        </div>
    </div>

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
    <script>
        $('.trash').click(function(){
            var id=$(this).data('id');
            $('#modalDelete').attr('href','<?php echo base_url(); ?>poli/delete/'+id);
        })
    </script>
</body>
</html>