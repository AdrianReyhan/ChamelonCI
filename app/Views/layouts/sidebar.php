<?php $uri = service('uri')->getSegment(1); ?>

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" data-img="<?= base_url('theme-assets/images/backgrounds/02.jpg') ?>">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row justify-content-center">
            <li class="nav-item">
                <a class="navbar-brand" href="<?= base_url('dashboard') ?>">
                    <!-- <img class="brand-logo" alt="logo" src="<?= base_url('theme-assets/images/logo/cmw.png') ?>"> -->
                    <h3 class="brand-text">CMSH</h3>
                </a>

                
            </li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="<?= ($uri == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= base_url('dashboard') ?>">
                    <i class="ft-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="<?= ($uri == 'chart') ? 'active' : '' ?>">
                <a href="<?= base_url('chart') ?>">
                    <i class="ft-pie-chart"></i>
                    <span>Charts</span>
                </a>
            </li>

            <li class="<?= ($uri == 'cards') ? 'active' : '' ?>">
                <a href="<?= base_url('cards') ?>">
                    <i class="ft-layers"></i>
                    <span>Cards</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>