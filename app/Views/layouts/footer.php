<footer class="footer footer-static footer-light navbar-border navbar-shadow justify-item-center">
    <div class="clearfix blue-grey lighten-2 text-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">
            © <?= date('Y') ?> &nbsp;CMSH
        </span>
    </div>
</footer>

<?= $this->include('layouts/scripts') ?>
<?= $this->renderSection('custom_js') ?>