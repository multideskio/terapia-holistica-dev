<?= $this->include('partials/main') ?>
<head>
    <?php echo view('partials/title-meta', array('title' => 'Title')); ?>
    <?= $this->include('partials/head-css') ?>
    <!-- Sweet Alert css-->
    <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <?= $this->renderSection('css') ?>
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?= $this->include('dashboard/menu') ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php echo view('partials/page-title', array('pagetitle' => '', 'title' => '')); ?>
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">{SAUDAÇÃO}!</h4>
                        </div>
                    </div>
                    <?= $this->renderSection('page') ?>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <?= $this->include('partials/customizer') ?>
    <?= $this->include('partials/vendor-scripts') ?>
    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Plugin adicionais -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Sweet Alerts js -->
    <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- cleave.js -->
    <script src="/assets/libs/cleave.js/cleave.min.js"></script>
    <!-- form masks init -->
    <script src="/assets/js/pages/form-masks.init.js"></script>
    <script>
        let _idSearch;
        let globalIdLogin;
    </script>
    <?= $this->renderSection('js') ?>
    <script>
        function recursoindisponivel() {
            Swal.fire({
                title: 'Recurso indisponivél no momento',
                type: 'error'
            });
        }
    </script>
</body>
</html>