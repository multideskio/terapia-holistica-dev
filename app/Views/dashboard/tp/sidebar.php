<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">
                    <span>Menu</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/home') ?>">
                        <i class="bi bi-speedometer"></i> <span>Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/anamnese') ?>">
                        <i class="bi bi-people"></i> <span>Clientes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/anamnese') ?>">
                        <i class="bi bi-pencil-square"></i> <span>Anamnese</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/anamnese') ?>">
                        <i class="bi bi-calendar-range"></i> <span>Agenda</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/analytics') ?>">
                        <i class="bi bi-pie-chart"></i> <span>Relatórios</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/finance') ?>">
                        <i class="bi bi-cash-coin"></i> <span>Financeiro</span>
                    </a>
                </li>

                <li class="menu-title">
                    <span data-key="t-menu">Terapeuta profissional</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/contacts') ?>">
                    <i class="bi bi-people"></i> <span>Contato</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/file-manager') ?>">
                    <i class="bi bi-archive"></i> <span>Arquivos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/tasks') ?>">
                    <i class="bi bi-list-task"></i> <span>Tarefas</span>
                    </a>
                </li>

                <li class="menu-title">
                    <span data-key="t-menu">Menu</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= site_url('dashboard/tp/history') ?>">
                        <i class="ri-dashboard-2-line"></i> <span>Históricos</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>