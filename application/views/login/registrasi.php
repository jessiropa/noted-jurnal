<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <center>REGISTRASI - NOTED SKRIPSI</center>
            </div>
            <div class="panel-body">
                <form role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nama Lengkap" name="nama" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Ulangi Password" name="password" type="password" value="">
                        </div>
                        <div class="text">
                            <a href="<?= base_url('login/'); ?>" class="small">Sudah punya akun ? Login</a>
                            <!-- <a href="" class="small">Lupa kata sandi ?</a> -->
                        </div>
                        <a href="index.html" class="btn btn-primary" style="float: right">Registrasi</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->