<?php include('head.php') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 mb-0 text-gray-800">ANA SAYFA</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-warning text-white shadow">

                                <div class="card-body">


                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Araba İşlemleri <i class="fas fa-car fa-2x text-gray-300" style="color:brown !important"></i></div>

                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/ekle.php"?>" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-plus" style="margin-right: 25px;"></i>
                                                </span>
                                                <span class="text">EKLE</span>
                                            </a>
                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/duzen.php"?>" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">DÜZENLE</span>
                                            </a>
                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/sil.php"?>" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"  style="margin-right: 25px;"></i>
                                                </span>
                                                <span class="text">SİL</span>
                                            </a>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body">

                                    <div class="col mr-3">
                                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-3">Sipariş İşlemleri: <i class="fas fa-cart-plus fa-2x text-gray-300" style="color:brown !important"></i></div>

                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/kira/ekle.php"?>" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-plus"  style="margin-right: 25px;"></i>
                                                </span>
                                                <span class="text">EKLE</span>
                                            </a>
                                            <a href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/Sil.php"?>" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash" style="margin-right: 25px;"></i>
                                                </span>
                                                <span class="text">SİL</span>
                                            </a>

                                    </div>

                                </div>
                            </div>
                        </div>


         

                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('footer.php') ?>
</body>

</html>