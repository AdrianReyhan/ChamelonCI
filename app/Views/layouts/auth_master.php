<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Authentication') ?> | Chameleon Admin</title>

    <link rel="stylesheet" href="<?= base_url('theme-assets/css/vendors.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/app-lite.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/core/colors/palette-gradient.css') ?>">
    <?= $this->renderSection('custom_css') ?>
</head>

<body class="blank-page" style="background: url('<?= base_url('theme-assets/images/backgrounds/bg-18.jpg') ?>') no-repeat center center fixed; background-size: cover;">
    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('theme-assets/vendors/js/vendors.min.js') ?>"></script>
    <script src="<?= base_url('theme-assets/js/core/app-lite.js') ?>"></script>
    <?= $this->renderSection('custom_js') ?>
</body>

</html>