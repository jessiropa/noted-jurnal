<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-navicon"></em>
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
                    <span class="pull-right panel-toggle panel-button-tab-left" id="modalFolder" onclick="create_folder()" style="background-color: #1E90FF;"><em class="fa fa-plus" style="color:white"></em></span>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Target</th>
                                <th scope="col">Periode Waktu</th>
                                <th scope="col">Progres</th>
                                <th scope="col">Pemilik</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Judul Target</td>
                                <td>3 bulan</td>
                                <td>0%</td>
                                <td>username</td>
                            </tr>
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


<!-- MODAL BUAT FOLDER -->
<div class="modal fade modal-dialog-centered" id="modalCreateForlderLink" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Tambahkan Target</b></h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form method="post" action="<?= base_url('dashboard/tambahFolder') ?>">
                <div class="modal-body">
                    <p style="color:black;">Target apa yang ingin Kamu capai ?</p>
                    <div class="form-group">
                        <label for="nama_folderlink" class="col-form-label">Judul target</label>
                        <input type="text" class="form-control" id="nama_folderlink" name="nama_folderlink">
                    </div>
                    <div class="form-group">
                        <label for="nama_folderlink" class="col-form-label">Pemilik target</label>
                        <input type="text" class="form-control" id="nama_folderlink" name="nama_folderlink">
                    </div>
                    <div class="form-group">
                        <label for="nama_folderlink" class="col-form-label">Periode Waktu</label>
                        <input type="date" class="form-control" id="nama_folderlink" name="nama_folderlink">
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

<!-- javascript -->
<script type="text/javascript">
    function create_folder() {
        $("#modalCreateForlderLink").modal('show');
    }

    function edit_folder() {
        $("#modalEditFolder").modal('show');
    }
</script>