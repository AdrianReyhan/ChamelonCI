<?= $this->extend('layouts/master')?>

<?= $this->section('content')?>

<div class="row match-height">
    <h1 class="mt-3">Chart Page</h1>
</div>

<?= $this->endSection()?> 

<?= $this->section('custom_js') ?>
<script src="<?= base_url('theme-assets/vendors/js/charts/chartist.min.js') ?>"></script>
<script src="<?= base_url('theme-assets/js/scripts/pages/dashboard-lite.js') ?>"></script>
<?= $this->endSection() ?>