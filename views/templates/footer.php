<script src="../../../assets/plugins/jquery/jquery.min.js"></script>
<script src="../../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/plugins/chart.js/Chart.min.js"></script>
<script src="../../../assets/plugins/sparklines/sparkline.js"></script>
<script src="../../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../../../assets/plugins/moment/moment.min.js"></script>
<script src="../../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../../assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= BASE_URL; ?>/js/adminlte.js"></script>
<script src="<?= BASE_URL; ?>/js/pages/dashboard.js"></script>
<script>
    $(function() {
        $("#data-table").DataTable({
            "searching": true,
            "dom": 'Bfrtip',
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "paging": true,
            "info": false,
            "ordering": false,
            "pageLength": 5,
            "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#data-table-container .col-md-6:eq(0)');

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(document).ready(function() {
        $("#show_hide_password span").addClass("bi bi-eye-slash-fill");
        $("#show_hide_password span").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password span').addClass("bi bi-eye-slash-fill");
                $('#show_hide_password span').removeClass("bi bi-eye-fill");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password span').removeClass("bi bi-eye-slash-fill");
                $('#show_hide_password span').addClass("bi bi-eye-fill");
            }
        });
    });
</script>
</body>

</html>