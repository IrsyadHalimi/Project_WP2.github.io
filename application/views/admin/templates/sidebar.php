<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sibershop</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Dasbor</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Klien'); ?>" class="active"><i class="fa fa-smile-o fa-fw"></i> Klien</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Karyawan'); ?>" class="active"><i class="fa fa-users fa-fw"></i> Karyawan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Layanan'); ?>" class="active"><i class="fa fa-scissors fa-fw"></i> Layanan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('kategori'); ?>" class="active"><i class="fa fa-bars fa-fw"></i> Kategori Layanan</a>
                    </li>
                    <li>
                        <a href="<?= base_url('JadwalKaryawan'); ?>" class="active"><i class="fa fa-calendar fa-fw"></i> Jadwal Karyawan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>