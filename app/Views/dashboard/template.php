<?= $this->include('partials/main') ?>

<head>
    <?php echo view('partials/title-meta', array('title' => $titlePage.' | Mari Terapeuta')); ?>
    <?= $this->include('partials/head-css') ?>
    <!-- Sweet Alert css-->
    <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <?= $this->renderSection('css') ?>

    <style>
        #loadTimeLine {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
            /* Ajuste a margem conforme necessário */
            z-index: 9999;
            /* Certifique-se de que a div fica acima de outros elementos */
        }

        #loadTimeLine div {
            width: 50px;
            height: 50px;
        }
    </style>
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
                    <?php echo view('partials/page-title', array('pagetitle' => NAME_SYSTEN, 'title' => $titlePage)); ?>
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column mb-3">
                        <div class="flex-grow-1">
                            <h4 class="mb-1"><?= saudacao(session('data')['name']) ?></h4>
                        </div>
                    </div>
                    <div class="text-center" id="loadTimeLine">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="sr-only fs-1">Loading...</span>
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

    <?= $this->renderSection('js') ?>
    <script>
        function recursoIndisponivel() {
            Swal.fire({
                title: 'Recurso indisponivél no momento',
                type: 'error'
            });
        }
    </script>
</body>

</html>