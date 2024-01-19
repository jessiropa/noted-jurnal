<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-bar-chart"></em>
                </a></li>
            <li class="active">Target</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Target</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Target Saya
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                    <span class="pull-right panel-toggle panel-button-tab-left" id="modalFolder" onclick="create_target()" style="background-color: #1E90FF;"><em class="fa fa-plus" style="color:white"></em></span>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Target</th>
                                <th scope="col">Periode Waktu</th>
                                <!-- <th scope="col">Progres</th> -->
                                <th scope="col">Pemilik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_target as $at) :
                            ?>
                                <tr>
                                    <td>
                                        <a data-toggle="modal" data-target="#modalEditTarget<?= $at['id_target']; ?>"> <?= $at['nama_target']; ?></a>
                                    </td>
                                    <td><?= $at['deadline_target']; ?></td>
                                    <td><?= $at['pemilik']; ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <br>
                    <br>
                </div>
            </div>
        </div><!--/.col-->
        <div class="col-sm-12">
            <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->


<!-- MODAL BUAT TARGET -->
<div class="modal fade modal-dialog-centered" id="modalCreateTarget" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Tambahkan Target</b></h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="post" action="<?= base_url('target/tambahTarget') ?>">
                <div class="modal-body">
                    <p style="color:black;">Target apa yang ingin Kamu capai ?</p>
                    <div class="form-group">
                        <label for="nama_target" class="col-form-label">Judul target</label>
                        <input type="text" class="form-control" id="nama_target" name="nama_target">
                    </div>
                    <div class="form-group">
                        <label for="user_target" class="col-form-label">Pemilik target</label>
                        <input type="text" class="form-control" id="user_target" name="user_target">
                    </div>
                    <div class="form-group">
                        <label for="tenggat_waktu" class="col-form-label">Periode Waktu</label>
                        <input type="date" class="form-control" id="tenggat_waktu" name="tenggat_waktu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Target</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- EDIT TARGET -->
<?php
foreach ($all_target as $at) :
?>
    <div class="modal fade modal-dialog-centered" id="modalEditTarget<?= $at['id_target']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-md-9">
                        <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Perbarui Target</b></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-danger btn-sm pull-right panel-button-tab-left" data-target="#modalHapusTarget<?= $at['id_target']; ?>">Hapus Target</button>
                    </div>
                </div>
                <form method="post" action="<?= base_url('target/editTarget') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_target" class="col-form-label">Judul target</label>
                            <input type="hidden" class="form-control" id="id_target" name="id_target" value="<?= $at['id_target']; ?>">
                            <input type="text" class="form-control" id="nama_target" name="nama_target" value="<?= $at['nama_target']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Deskripsi target</label>
                            <textarea class="form-control" type="text" id="deskripsi_target" name="deskripsi_target" rows="3"><?= $at['deskripsi_target']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Pemilik target</label>
                            <input type="text" class="form-control" id="user_target" name="user_target" value="<?= $at['pemilik']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Periode Waktu</label>
                            <input type="date" class="form-control" id="deadline_target" name="deadline_target" value="<?= $at['deadline_target']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Tugas</label>
                            <input type="target" class="form-control" id="tugas_target" name="tugas_target" value="<?= $at['tugas']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Proyek</label>
                            <input type="target" class="form-control" id="proyek_target" name="proyek_target" value="<?= $at['proyek']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Target</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- konfirmasi hapus target -->
<div class="modal fade" id="modalHapusTarget<?= $at['id_target']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus <b>target</b> ini ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('target/hapusTarget') ?>">
                <input type="hidden" class="form-control" id="id_target" name="id_target" value="<?= $at['id_target']; ?>">
                <div class="modal-body">
                    Apakah anda yakin untuk menghapus "<b><?= $at['nama_target']; ?></b>" ?
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Hapus target</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<div id="modalProsesPerawat" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-header">
            <h4 class="modal-title">Proses, <br />harap menunggu ...</h4>
        </div>
        <div class="modal-body">
            <iframe src="https://giphy.com/embed/jAYUbVXgESSti" width="100%" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        </div>
        <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   -->
        </div>
    </div>
</div>



<!-- javascript -->
<script type="text/javascript">
    function create_target() {
        $("#modalCreateTarget").modal('show');
    }

    function hapusTarget() {
        $("#modalHapusTarget").modal('show');
    }
</script>