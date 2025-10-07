<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp dashboard template.">
    <meta name="keywords" content="admin, dashboard, template, bootstrap, webapp">
    <meta name="author" content="ThemeSelect">

    <title><?= esc($title ?? 'Dashboard') ?> | Chameleon Admin</title>

    <link rel="apple-touch-icon" href="<?= base_url('theme-assets/images/ico/apple-icon-120.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('theme-assets/images/ico/favicon.ico') ?>">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Comfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/vendors.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme-assets/vendors/css/charts/chartist.css') ?>">

    <!-- CHAMELEON CSS -->
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/app-lite.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">

    <!-- PAGE LEVEL CSS -->
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/core/menu/menu-types/vertical-menu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/core/colors/palette-gradient.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme-assets/css/pages/dashboard-ecommerce.css') ?>">

    <?= $this->renderSection('custom_css') ?>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">