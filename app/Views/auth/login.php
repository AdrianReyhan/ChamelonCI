<?= $this->section('custom_css') ?>
<style>
    body {
        background: url('<?= base_url('theme-assets/images/backgrounds/bg-18.jpg') ?>') no-repeat center center fixed;
        background-size: cover;
        position: relative;
    }

    body::before {
        content: "";
        position: absolute;
        inset: 0;
        /* background: rgba(255, 255, 255, 0.6); */
        z-index: 0;
    }

    .app-content {
        position: relative;
        z-index: 1;
    }

    .card {
        width: 420px;
        max-width: 90%;
        border-radius: 1rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(4px);
    }

    .font-large-1 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #444;
    }

    .full-height-vh {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<?= $this->endSection() ?>
<?= $this->include('layouts/header') ?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <section id="login">
                <div class="container">
                    <div class="row full-height-vh">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0 box-shadow-2">
                                <div class="card-header border-0">
                                    <div class="text-center mb-1">
                                        <img src="<?= base_url('theme-assets/images/logo/logo.png') ?>" alt="branding logo">
                                    </div>
                                    <div class="font-large-1 text-center">
                                        Member Login
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal error" action="<?= base_url('auth/login') ?>" method="post" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control round" name="username" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control round" name="password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>

                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-sm-left"></div>
                                                <div class="col-md-6 col-12 text-center text-sm-right">
                                                    <a href="<?= base_url('recover-password') ?>" class="card-link">Forgot Password?</a>
                                                </div>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2">
                                        <span>OR Sign Up Using</span>
                                    </p>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook"><span class="ft-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter"><span class="ft-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram"><span class="ft-instagram"></span></a>
                                    </div>

                                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                                        <span>Don't have an account ? <a href="<?= base_url('register') ?>" class="card-link">Sign Up</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>