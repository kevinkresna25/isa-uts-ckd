<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/">Dashboard</a>
    <a href="/presensi">Presensi</a>
    {{-- <a href="#">Clients</a>
    <a href="#">Contact</a> --}}
</div>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
