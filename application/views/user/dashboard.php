<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-12">
                <span>
                    <center> Senin, 8 Januari 2024</center>
                </span>
                <h1>
                    <center>Halo, Username</center> <br>
                </h1>
            </div>
        </div><!--/.row-->
    </div>

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                        <div class="large">120</div>
                        <div class="text-muted">Tugas Selesai</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                        <div class="large">52</div>
                        <div class="text-muted">Tugas Terlambat</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">24</div>
                        <div class="text-muted">Tugas Tertunda</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                    <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                        <div class="large">25.2k</div>
                        <div class="text-muted">Tugas Baru</div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
</div> <!--/.main-->


<script type='text/javascript'>
    window.setTimeout("tanggal()", 100);


    // function jam_tanggal() {
    //     var dt = new Date();
    //     if (dt.getTimezoneOffset() == 0) {
    //         (a = dt.getTime() + (7 * 60 * 60 * 100))
    //     } else {
    //         (a = dt.getTime());
    //     }
    //     dt.setTime(a);
    //     var tahun = dt.getFullYear();
    //     var hari = dt.getDay();
    //     var bulan = dt.getMonth();
    //     var tanggal = dt.getDate();
    //     var array_hari = new Array("Minggu, ", "Senin, ", "Selasa, ", "Rabu, ", "Kamis, ", "Jumat, ", "Sabtu, ");
    //     var array_bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    //     document.getElementById("datetime").innerHTML = array_hari[hari] + " " + tanggal + " " + array_bulan[bulan] + " " + tahun + " | " + ((dt.getHours() < 10) ? "0" : "") + dt.getHours() + " : " + ((dt.getMinutes() < 10) ? "0" : "") + dt.getMinutes() + " : " + ((dt.getSeconds() < 10) ? "0" : "") + dt.getSeconds() + (" WIB");
    //     jam_refresh();
    // }

    function jam_refresh() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('jam_tanggal()', refresh)
    }

    function tanggal() {
        var dt = new Date();
        var hari = dt.getDay();
        var bulan = dt.getMonth();
        var tanggal = dt.getDate();
        var array_hari = new Array("Minggu, ", "Senin, ", "Selasa, ", "Rabu, ", "Kamis, ", "Jumat, ", "Sabtu, ");
        var array_bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        document.getElementById("tanggal").innerHTML = array_hari[hari] + " " + tanggal + " " + array_bulan[bulan] + " " + tahun;
        jam_refresh();
    }
</script>