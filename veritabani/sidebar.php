<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #ff161e 10%, #beb8af 100%) !important;" id="accordionSidebar">

<!-- Sidebar Toggler (Sidebar) -->
<div class="sidebar-heading">
    <button class="rounded- border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/index.php"?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-car"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Car Admin</div>
</a>

<!-- Heading -->
<div class="sidebar-heading">
    Arayüz
</div>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/index.php"?>">
        <i class="fas fa-fw fa-users-cog"></i>
        <span>Anasayfa</span></a>
</li>

<!-- Divider -->


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-car-side"></i>
        <span>Araba Kirala</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Araba:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/kira/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/kira/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/kira/view.php"?>" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Kiralanmış Arabalar görüntüle</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-layer-group"></i>
        <span>Kira ücretleri</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Araba:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/stok/ekle.php"?>">Gün-ay-yıl ücret ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/stok/sil.php"?>">Gün-ay-yıl ücret sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama12" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Plaka </span>
    </a>
    <div id="sulama12" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Araçlar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/plaka/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/plaka/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Araçlar</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Araçlar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/duzen.php"?>">Duzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/araba/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama2" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Araç kategori ve marka</span>
    </a>
    <div id="sulama2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Araçlar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/ozel/kekle.php"?>">Kategori ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/ozel/ksil.php"?>">Kategori Sil</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/ozel/tekle.php"?>">Kategori ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani/ozel/tsil.php"?>">Kategori Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Firma</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Firma:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/sil.php"?>">Sil</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/oekle.php"?>">Ödeme Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/oduzen.php"?>">Ödeme düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani/sirket/osil.php"?>">Ödeme Sil</a>
            
        </div>
    </div>
</li>
<!-- Divider -->



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">



</ul>