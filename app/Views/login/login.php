<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => 'Sign In')); ?>
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="/" class="d-inline-block auth-logo">
                                    <img src="/assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">
                                Seja bem-vindo(a) a maior comunidade de Tepareutas Holísticas do mundo.
                                <br>
                                Tenha acesso a recursos profissionais para alavancar a sua carreira como terapeuta.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Bem-vindo a nossa comunidade</h5>
                                    <p class="text-muted"></p>
                                </div>
                                <div class="p-2 mt-4">
                                    <?= form_open('auth') ?>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">E-mail</label>
                                        <input type="text" class="form-control" id="username" name="email" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="<?= site_url('login/recover') ?>" class="text-muted">Perdeu a senha?</a>
                                        </div>
                                        <label class="form-label" for="password-input">Senha</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="pass">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>
                                    <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>-->

                                    <input type="hidden" name="redirect" value="<?= $redirect ?>">
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Entrar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <div class="mt-2 text-center">
                            <p class="mb-0">Ainda não tem uma conta ? <a href="#" onclick="alert('Função não disponivel')" class="fw-semibold text-primary text-decoration-underline">Assinar um plano</a> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
        <!-- footer -->
        <?= $this->include('login/includes/footer.php') ?>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
    <!-- particles js -->
    <script src="/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="/assets/js/pages/password-addon.init.js"></script>

</body>

</html>