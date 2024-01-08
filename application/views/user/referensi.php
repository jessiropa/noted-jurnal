<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-link"></em>
                </a></li>
            <li class="active">REFERENSI</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">REFERENSI</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-6">
            <form action="<?= base_url('dashboard/tambahLink') ?>" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Tambah Link Referensi</b>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                        <span class="pull-right panel-toggle panel-button-tab-left" id="modalFolder" onclick="create_folder()"><em class="fa fa-plus"></em></span>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Folder</h4>
                                <select class="form-control" id="folder_link" name="folder_link">
                                    <option>Pilih Folder</option>
                                    <?php
                                    foreach ($folder as $f) :
                                    ?>
                                        <option value="<?= $f['id_folder'] ?>"><?= $f['nama_folder'] ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Judul Artikel</h4>
                                <input id="judul_artikel" name="judul_artikel" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Link artikel</h4>
                                <input id="link_artikel" name="link_artikel" type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <div class="form-group">
                            <div class="col-md-12 widget-right">
                                <button class="btn btn-primary btn-md pull-right" id="btn-todo" type="submit">Tambahkan</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default articles">
                <div class="panel-heading">
                    Link Referensi
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                <em class="fa fa-object-group"></em>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <ul class="dropdown-settings">
                                        <?php
                                        foreach ($folder as $f) :
                                        ?>
                                            <li><a href="<?= $f['id_folder'] ?>">
                                                    <em class="fa fa-external-link-square"></em> <?= $f['nama_folder'] ?>
                                                </a></li>
                                            <li class="divider"></li>
                                        <?php
                                        endforeach;
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                </div>
                <div class="panel-body articles-container">
                    <?php
                    foreach ($link_all as $la) :
                    ?>
                        <div class="article border-bottom" data-bs-spy="scroll" class="scrollspy-example" tabindex="0">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2 col-md-2 date">
                                        <!-- <div class="large">30</div> -->
                                        <div class="" style="font-size: 15px;"><b><?= $la['tgl_create'] ?></b></div>
                                    </div>
                                    <div class="col-xs-10 col-md-10">
                                        <h4><a href="<?= $la['link_artikel'] ?>" style="font-size: 15px;"><?= $la['nama_artikel'] ?> </a></h4>
                                    </div>
                                </div>

                            </div>

                            <div class="clear"></div>
                        </div><!--End .article-->
                    <?php
                    endforeach;
                    ?>
                </div>
            </div><!--End .articles-->
        </div>
    </div>
</div> <!--/.main-->

<!-- MODAL BUAT FOLDER -->
<div class="modal fade" id="modalCreateForlderLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle"><b>Tambahkan Folder Link</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('dashboard/tambahFolder') ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nama_folderlink" class="col-form-label">Nama Folder</label>
                        <input type="text" class="form-control" id="nama_folderlink" name="nama_folderlink">
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning btn-md" id="edit_folder" onclick="edit_folder()" type="button">Edit Folder</button>
                    <button type="submit" class="btn btn-primary">Tambahkan Folder</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit folder -->
<div class="modal fade" id="modalEditFolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle"><b>Edit Folder Link</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('dashboard/tambahFolder') ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="nama_folderlink" class="col-form-label">Nama Folder</label>
                        <input type="text" class="form-control" id="nama_folderlink" name="nama_folderlink">
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-warning btn-md" id="edit_folder" onclick="edit_folder()"type="button">Edit Folder</button> -->
                    <button type="submit" class="btn btn-primary">Tambahkan Folder</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- javascript -->
<script type="text/javascript">
    function create_folder() {
        $("#modalCreateForlderLink").modal('show');
    }

    function edit_folder() {
        $("#modalEditFolder").modal('show');
    }
</script>