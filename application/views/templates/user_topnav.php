<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>NOTED</span>SKRIPSI</a>
            <!-- <span class="nav navbar-top-links navbar-right"></span> -->
            <br>
            <span style="float: right;"><b style="color: white;" id="datetime"></b></span>
        </div>
    </div><!-- /.container-fluid -->
</nav>

<script>
    window.setTimeout("jam_tanggal()", 100);


    function jam_tanggal() {
        var dt = new Date();
        if (dt.getTimezoneOffset() == 0) {
            (a = dt.getTime() + (7 * 60 * 60 * 100))
        } else {
            (a = dt.getTime());
        }
        dt.setTime(a);
        var tahun = dt.getFullYear();
        var hari = dt.getDay();
        var bulan = dt.getMonth();
        var tanggal = dt.getDate();
        var array_hari = new Array("Minggu, ", "Senin, ", "Selasa, ", "Rabu, ", "Kamis, ", "Jumat, ", "Sabtu, ");
        var array_bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        document.getElementById("datetime").innerHTML = array_hari[hari] + " " + tanggal + " " + array_bulan[bulan] + " " + tahun + " | " + ((dt.getHours() < 10) ? "0" : "") + dt.getHours() + " : " + ((dt.getMinutes() < 10) ? "0" : "") + dt.getMinutes() + " : " + ((dt.getSeconds() < 10) ? "0" : "") + dt.getSeconds() + (" WIB");
        jam_refresh();
    }

    function jam_refresh() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('jam_tanggal()', refresh)
    }
</script>