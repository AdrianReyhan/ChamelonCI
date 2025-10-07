<script src="<?= base_url('theme-assets/vendors/js/vendors.min.js') ?>"></script>
<script src="<?= base_url('theme-assets/vendors/js/charts/chartist.min.js') ?>"></script>
<script src="<?= base_url('theme-assets/js/core/app-menu-lite.js') ?>"></script>
<script src="<?= base_url('theme-assets/js/core/app-lite.js') ?>"></script>
<script src="<?= base_url('theme-assets/js/scripts/pages/dashboard-lite.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<?= $this->renderSection('custom_js') ?>

</body>

</html>

<script>
    $(document).ready(function() {
        $('[data-toggle="dropdown"]').off('click').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            const $menu = $(this).next('.dropdown-menu');
            $('.dropdown-menu').not($menu).removeClass('show');
            $menu.toggleClass('show');
        });

        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').removeClass('show');
            }
        });
    });
</script>