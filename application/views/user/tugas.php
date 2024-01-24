<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-folder-open"></em>
                </a></li>
            <li class="active">TUGAS</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">TUGAS</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tugas Saya
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                    <span class="pull-right panel-toggle panel-button-tab-left" id="modalFolder" onclick="create_proyek()" style="background-color: #1E90FF; cursor: pointer;"><em class="fa fa-plus" style="color:white"></em></span>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Tugas</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deadline</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_tugas as $ats) :
                            ?>
                                <tr>
                                    <td>
                                        <?= $ats['nama_tugas']; ?>
                                    </td>
                                    <td><?= $ats['nama_status']; ?></td>
                                    <td><?= $ats['deadline_tugas']; ?></td>
                                    <td>
                                        <a class="btn" data-toggle="modal" data-target="#modalEditTugas<?= $ats['id_tugas']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a> |
                                        <a class="btn" data-toggle="modal" data-target="#modalHapusTugas<?= $ats['id_tugas']; ?>"><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a>
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

<!-- Tambah Tugas -->
<div class="modal fade modal-dialog-centered" id="modalCreateTarget" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Tugas Baru</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('tugas/tambahTugas') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_target" class="col-form-label">Nama Tugas</label>
                        <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" placeholder="Tuliskan Nama Tugas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Tugas</button>
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
foreach ($all_tugas as $ats) :
?>
    <div class="modal fade" id="modalHapusTugas<?= $ats['id_tugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Hapus <b>Tugas</b> ini ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('tugas/deleteTugas') ?>">
                    <input type="hidden" class="form-control" id="id_tugas" name="id_tugas" value="<?= $ats['id_tugas']; ?>">
                    <div class="modal-body">
                        Apakah anda yakin untuk menghapus "<b><?= $ats['nama_tugas']; ?></b>" ?
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

<!-- Edit Tugas -->
<?php
foreach ($all_tugas as $ats) :
?>
    <div class="modal fade modal-dialog-centered" id="modalEditTugas<?= $ats['id_tugas']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-md-9">
                        <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b><?= $ats['nama_tugas']; ?></b></h4>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <form method="post" action="<?= base_url('tugas/editTugas') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_proyek" class="col-form-label">Nama Tugas</label>
                            <input type="hidden" class="form-control" id="id_tugas" name="id_tugas" value="<?= $ats['id_tugas']; ?>">
                            <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" value="<?= $ats['nama_tugas']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="user_target" class="col-form-label">Deskripsi Tugas</label>
                            <textarea class="form-control" type="text" id="deskripsi_tugas" name="deskripsi_tugas" rows="3"><?= $ats['deskripsi_tugas']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Deadline Tugas</label>
                            <input type="date" class="form-control" id="deadline_tugas" name="deadline_tugas" value="<?= $ats['deadline_tugas']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Proyek</label>
                            <select class="form-control" id="proyek_tugas" name="proyek_tugas">
                                <option>Proyek</option>
                                <?php
                                foreach ($all_proyek as $ap) :
                                ?>
                                    <option value="<?= $ap['id_proyek'] ?>" <?= $ap['id_proyek'] == $ats['proyek'] ? "selected" : null ?>><?= $ap['nama_proyek'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tenggat_waktu" class="col-form-label">Status Tugas</label>
                            <select class="form-control" id="status_tugas" name="status_tugas">
                                <option>Status Tugas</option>
                                <?php
                                foreach ($status_tugas as $st) :
                                ?>
                                    <option value="<?= $st['id_st'] ?>" <?= $st['id_st'] == $ats['status_tugas'] ? "selected" : null ?>><?= $st['nama_status'] ?></option>
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