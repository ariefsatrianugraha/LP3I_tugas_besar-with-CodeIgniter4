        <footer class="main-footer">
            <strong>&copy; Arief Satria Nugraha</strong>
        </footer>
 
        <script src="<?= base_url() ?>/Assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>/Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>/Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script>
            $(function () {
                $("#table").DataTable({
                "responsive": true,
                "autoWidth": false,
                });
            });
        </script>

    </body>
</html>