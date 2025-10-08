<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ft-menu"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="nav-link dropdown-toggle dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown" aria-expanded="false">
                            <span class="avatar avatar-online">
                                <img src="<?= base_url('theme-assets/images/portrait/small/profile.png') ?>" alt="avatar">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="<?= base_url('profile') ?>">
                                    <span class="avatar avatar-online">
                                        <img src="<?= base_url('theme-assets/images/portrait/small/profile.png') ?>" alt="avatar">
                                        <span class="user-name text-bold-700 ml-1">John Doe</span>
                                    </span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('profile/edit') ?>"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?= base_url('inbox') ?>"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="<?= base_url('tasks') ?>"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="<?= base_url('chats') ?>"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>