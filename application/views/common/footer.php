 <!--Footer-->
 <footer class="black fixed-bottom page-footer text-center font-small mt-5 wow fadeIn ">
 <!--Copyright-->
<div class="footer-copyright py-3">
  © 2019 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('assets/mdb/js/jquery-3.4.1.min.js')?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url('assets/mdb/js/popper.min.js')?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/mdb/js/bootstrap.min.js')?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/mdb/js/mdb.min.js')?>"></script>
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();

</script>
</body>

</html>

<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
    // Regular map
    function regular_map() {
    var var_location = new google.maps.LatLng(-23,56, -46,6327);

    var var_mapoptions = {
    center: var_location,
    zoom: 50
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
    var_mapoptions);

    var var_marker = new google.maps.Marker({
    position: var_location,
    map: var_map,
    title: "New York"
    });
    }
    </script>
</body>

</html>
