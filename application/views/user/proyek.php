<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-folder-open"></em>
                </a></li>
            <li class="active">PROYEK</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">PROYEK</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Proyek Saya
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                    <span class="pull-right panel-toggle panel-button-tab-left" id="modalFolder" onclick="create_proyek()" style="background-color: #1E90FF; cursor: pointer;"><em class="fa fa-plus" style="color:white"></em></span>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Proyek</th>
                                <th scope="col">Tanggal dibuat proyek</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_proyek as $ap) :
                            ?>
                                <tr>
                                    <td>
                                        <a href="<?= base_url(); ?>tugas/tugasById/<?= $ap['id_proyek'] ?>"><?= $ap['nama_proyek']; ?></a>
                                    </td>
                                    <td><?= $ap['create_proyek']; ?></td>
                                    <td><?= $ap['user_proyek']; ?></td>
                                    <td>
                                        <!-- <a class="btn" data-toggle="modal" data-target="#modalDetailProyek<?= $ap['id_proyek']; ?>"><i class="fa fa-info" aria-hidden="true" style="color:green"></i></a> | -->
                                        <a class="btn" data-toggle="modal" data-target="#modalEditProyek<?= $ap['id_proyek']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> |
                                        <a class="btn" data-toggle="modal" data-target="#modalHapusProyek<?= $ap['id_proyek']; ?>"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
                                    </td>
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

<!-- Tambah Proyek -->
<div class="modal fade modal-dialog-centered" id="modalCreateTarget" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Proyek Baru</b></h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="post" action="<?= base_url('proyek/tambahProyek') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_target" class="col-form-label">Nama Proyek</label>
                        <input type="text" class="form-control" id="nama_proyek" name="nama_proyek">
                    </div>
                    <div class="form-group">
                        <label for="user_target" class="col-form-label">Pemilik proyek</label>
                        <input type="text" class="form-control" id="user_proyek" name="user_proyek">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Proyek</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End proyek -->

<!-- Detail Proyek -->
<?php
foreach ($all_proyek as $ap) :
?>
    <div class="modal fade modal-dialog-centered" id="modalDetailProyek<?= $ap['id_proyek']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-md-9">
                        <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Proyek</b></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_target" class="col-form-label">Nama Proyek</label>
                            <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="<?= $ap['nama_proyek']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Deskripsi Proyek</label>
                            <textarea class="form-control" type="text" id="deskripsi_proyek" name="deskripsi_proyek" rows="3" disabled><?= $ap['deskripsi_proyek']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Pemilik Proyek</label>
                            <input type="text" class="form-control" id="user_proyek" name="user_proyek" value="<?= $ap['user_proyek']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Periode Waktu</label>
                            <input type="date" class="form-control" id="deadline_target" name="deadline_target" value="<?= $ap['deadline_proyek']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Target</label>
                            <input type="target" class="form-control" id="target_proyek" name="target_proyek" value="<?= $ap['target']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Tugas</label>
                            <input type="target" class="form-control" id="tugas_proyek" name="tugas_proyek" value="<?= $ap['tugas']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Status Proyek</label>
                            <input type="target" class="form-control" id="status_proyek" name="status_proyek" value="<?= $ap['status_proyek']; ?>" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Detail Proyek -->

<!-- hapus proyek -->
<?php
foreach ($all_proyek as $ap) :
?>
    <div class="modal fade" id="modalHapusProyek<?= $ap['id_proyek']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <b>proyek</b> ini ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('proyek/deleteProyek') ?>">
                    <input type="hidden" class="form-control" id="id_proyek" name="id_proyek" value="<?= $ap['id_proyek']; ?>">
                    <div class="modal-body">
                        Apakah anda yakin untuk menghapus "<b><?= $ap['nama_proyek']; ?></b>" ?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Hapus proyek</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- end hapus proyek -->

<!-- Edit proyek -->
<?php
foreach ($all_proyek as $ap) :
?>
    <div class="modal fade modal-dialog-centered" id="modalEditProyek<?= $ap['id_proyek']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-md-9">
                        <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Perbaharui Proyek</b></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <form method="post" action="<?= base_url('proyek/editProyek') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_proyek" class="col-form-label">Nama Proyek</label>
                            <input type="hidden" class="form-control" id="id_proyek" name="id_proyek" value="<?= $ap['id_proyek']; ?>">
                            <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="<?= $ap['nama_proyek']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Deskripsi Proyek</label>
                            <textarea class="form-control" type="text" id="deskripsi_proyek" name="deskripsi_proyek" rows="3"><?= $ap['deskripsi_proyek']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Pemilik Proyek</label>
                            <input type="text" class="form-control" id="user_proyek" name="user_proyek" value="<?= $ap['user_proyek']; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Periode Waktu</label>
                            <input type="date" class="form-control" id="deadline_proyek" name="deadline_proyek" value="<?= $ap['deadline_proyek']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Target</label>
                            <!-- <input type="text" class="form-control" id="target_proyek" name="target_proyek" value="<?= $ap['target']; ?>"> -->
                            <select class="form-control" id="target_proyek" name="target_proyek">
                                <option>-Pilih Target-</option>
                                <?php
                                foreach ($all_target as $at) :
                                ?>
                                    <option value="<?= $at['id_target'] ?>" <?= $at['id_target'] == $ap['target'] ? "selected" : null ?>><?= $at['nama_target'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Tugas</label>
                            <select class="form-control" id="tugas_proyek" name="tugas_proyek">
                                <option>-Pilih Tugas-</option>
                                <?php
                                foreach ($all_tugas as $tg) :
                                ?>
                                    <option value="<?= $tg['id_tugas'] ?>" <?= $tg['id_tugas'] == $ap['tugas'] ? "selected" : null ?>><?= $tg['nama_tugas'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Status Proyek</label>
                            <select class="form-control" id="status_proyek" name="status_proyek">
                                <option value="0">-Pilih Status-</option>
                                <?php
                                foreach ($status_proyek as $sp) :
                                ?>
                                    <option value="<?= $sp['id_sp'] ?>" <?= $sp['id_sp'] == $ap['status_proyek'] ? "selected" : null ?>><?= $sp['nama_status'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan Proyek</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- end edit proyek -->


<!-- javascript -->
<script>
    function create_proyek() {
        $("#modalCreateTarget").modal('show');
    }
</script>