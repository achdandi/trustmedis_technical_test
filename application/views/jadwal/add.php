<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row my-2">
                <div class="col-12">
                    <h1 class="m-0 text-center">ADD JADWAL DOKTER</h1>
                    <?php if($this->session->flashdata('message')){ 
                        $message = $this->session->flashdata('message')?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $message['message'] ?><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <?php } ?>
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
                        <form action="<?php echo base_url('jadwal/save') ?>" method="POST">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <label for="dokter">PILIH DOKTER</label>
                                        <select name="dokter" id="dokter" class="custom-select rounded-0">
                                            <option selected disabled>Pilih dokter</option>
                                            <?php foreach ($data_pegawai as $pegawai) : ?>
                                                <option value="<?= $pegawai->pegawai_id ?>"><?= $pegawai->pegawai_nama ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                            <small class="text-danger">
                                                <?php echo form_error('poli') ?>
                                            </small>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="poli">PILIH POLI</label>
                                        <select name="poli" id="poli" class="custom-select rounded-0">
                                            <option selected disabled>Pilih poli</option>
                                            <?php foreach ($data_poli as $poli) : ?>
                                                <option value="<?= $poli->poli_id ?>"><?= $poli->poli_nama ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                            <small class="text-danger">
                                                <?php echo form_error('poli') ?>
                                            </small>
                                        </select>
                                    </div>
                                </div>
                                <label class="mt-2">JADWAL HARI</label>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="senin" name="hari[]" value="1" onclick="functionHari()">
                                                        <label for="senin" class="custom-control-label">Senin</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai1" class="form-control" id="jam-mulai-senin" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-senin">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai1" id="jam-selesai-senin" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="selasa" name="hari[]" value="2" onclick="functionHari()">
                                                        <label for="selasa" class="custom-control-label">Selasa</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai-selasa">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai2" class="form-control" id="jam-mulai-selasa" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-selasa">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai2" id="jam-selesai-selasa" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="rabu" name="hari[]" value="3" onclick="functionHari()">
                                                        <label for="rabu" class="custom-control-label">Rabu</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai3" class="form-control" id="jam-mulai-rabu" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-rabu">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai3" id="jam-selesai-rabu" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="kamis" name="hari[]" value="4" onclick="functionHari()">
                                                        <label for="kamis" class="custom-control-label">Kamis</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai-kamis">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai4" class="form-control" id="jam-mulai-kamis" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-kamis">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai4" id="jam-selesai-kamis" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="jumat" name="hari[]" value="5" onclick="functionHari()">
                                                        <label for="jumat" class="custom-control-label">Jumat</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai5" class="form-control" id="jam-mulai-jumat" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-jumat">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai5" id="jam-selesai-jumat" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="sabtu" name="hari[]" value="6" onclick="functionHari()">
                                                        <label for="sabtu" class="custom-control-label">Sabtu</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai-sabtu">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai6" class="form-control" id="jam-mulai-sabtu" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-sabtu">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai6" id="jam-selesai-sabtu" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="minggu" name="hari[]" value="7" onclick="functionHari()">
                                                        <label for="minggu" class="custom-control-label">Minggu</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3"><label for="jam-mulai-minggu">Jam Mulai</label></div>
                                                    <div class="col-6"><input type="time" name="jammulai7" class="form-control" id="jam-mulai-minggu" disabled required></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="col-3 py-auto"><label for="jam-selesai-minggu">Jam Selesai</label></div>
                                                    <div class="col-6"><input type="time" name="jamselesai7" id="jam-selesai-minggu" class="form-control" disabled required></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('jadwal') ?>" class="btn btn-danger float-left">Back</a>
                                <button class="btn btn-primary float-right">Save</button>
                            </div>
                        </form>
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
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
    <script>
        function functionHari(){
            var $senin = document.getElementById("senin");
            if (senin.checked == true) {
                $('#jam-mulai-senin').prop('disabled', false);
                $('#jam-selesai-senin').prop('disabled', false);
            } else {
                $('#jam-mulai-senin').prop('disabled', true);
                $('#jam-selesai-senin').prop('disabled', true);
            }
            
            var $selasa = document.getElementById("selasa");
            if (selasa.checked == true) {
                $('#jam-mulai-selasa').prop('disabled', false);
                $('#jam-selesai-selasa').prop('disabled', false);
            } else {
                $('#jam-mulai-selasa').prop('disabled', true);
                $('#jam-selesai-selasa').prop('disabled', true);
            }

            var $rabu = document.getElementById("rabu");
            if (rabu.checked == true) {
                $('#jam-mulai-rabu').prop('disabled', false);
                $('#jam-selesai-rabu').prop('disabled', false);
            } else {
                $('#jam-mulai-rabu').prop('disabled', true);
                $('#jam-selesai-rabu').prop('disabled', true);
            }
            
            var $kamis = document.getElementById("kamis");
            if (kamis.checked == true) {
                $('#jam-mulai-kamis').prop('disabled', false);
                $('#jam-selesai-kamis').prop('disabled', false);
            } else {
                $('#jam-mulai-kamis').prop('disabled', true);
                $('#jam-selesai-kamis').prop('disabled', true);
            }

            var $jumat = document.getElementById("jumat");
            if (jumat.checked == true) {
                $('#jam-mulai-jumat').prop('disabled', false);
                $('#jam-selesai-jumat').prop('disabled', false);
            } else {
                $('#jam-mulai-jumat').prop('disabled', true);
                $('#jam-selesai-jumat').prop('disabled', true);
            }
            
            var $sabtu = document.getElementById("sabtu");
            if (sabtu.checked == true) {
                $('#jam-mulai-sabtu').prop('disabled', false);
                $('#jam-selesai-sabtu').prop('disabled', false);
            } else {
                $('#jam-mulai-sabtu').prop('disabled', true);
                $('#jam-selesai-sabtu').prop('disabled', true);
            }
            
            var $minggu = document.getElementById("minggu");
            if (minggu.checked == true) {
                $('#jam-mulai-minggu').prop('disabled', false);
                $('#jam-selesai-minggu').prop('disabled', false);
            } else {
                $('#jam-mulai-minggu').prop('disabled', true);
                $('#jam-selesai-minggu').prop('disabled', true);
            }
        }

    </script>
</body>
</html>
