<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="<?= base_url('dashboard/'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="<?= base_url('target/'); ?>"><em class="fa fa-bar-chart">&nbsp;</em> Target</a></li>
        <li><a href="<?= base_url('proyek/'); ?>"><em class="fa fa-folder-open">&nbsp;</em> Proyek</a></li>
        <li><a href="<?= base_url('tugas/'); ?>"><em class="fa fa-file-text">&nbsp;</em> Tugas</a></li>
        <li><a href="<?= base_url('referensi/'); ?>"><em class="fa fa-link">&nbsp;</em> Link Referensi</a></li>
        <li><a href="<?= base_url('dashboard/setting'); ?>"><em class="fa fa-sliders">&nbsp;</em> Pengaturan</a></li>
        <li><a href="<?= base_url('login/') ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar-->