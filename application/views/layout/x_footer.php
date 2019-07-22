<!-- </main> -->
<!--Main End-->
</div>
<!--Content Wrapper End-->
</div>
<!--Wrapper End-->
<script src="<?= base_url('assets/')  ?>js/vendor/jquery-3.3.1.js"></script>
<script src="<?= base_url('assets/')  ?>js/vendor/jquery-library.js"></script>
<script src="<?= base_url('assets/')  ?>js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="<?= base_url('assets/')  ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/')  ?>js/jquery.sortable.js"></script>
<script src="<?= base_url('assets/')  ?>js/chosen.jquery.js"></script>
<script src="<?= base_url('assets/')  ?>js/tilt.jquery.js"></script>
<script src="<?= base_url('assets/')  ?>js/scrollbar.min.js"></script>
<script src="<?= base_url('assets/')  ?>js/prettyPhoto.js"></script>
<script src="<?= base_url('assets/')  ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/')  ?>js/readmore.js"></script>
<script src="<?= base_url('assets/')  ?>js/countTo.js"></script>
<script src="<?= base_url('assets/')  ?>js/appear.js"></script>
<script src="<?= base_url('assets/')  ?>js/tipso.js"></script>
<script src="<?= base_url('assets/')  ?>js/gmap3.js"></script>
<script src="<?= base_url('assets/')  ?>js/jRate.js"></script>
<script src="<?= base_url('assets/')  ?>js/main.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/mySwal.js"></script>

<script>
    const menu_icon = document.querySelector('.menu-icon');

    function addClassFunThree() {
        this.classList.toggle("click-menu-icon");
    }
    menu_icon.addEventListener('click', addClassFunThree);

    $(function() {
        $('.DataTables').DataTable()
    })
</script>


<script>
    CKEDITOR.replace("#editor");
</script>

</body>

</html>