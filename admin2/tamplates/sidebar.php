<?php
$menu = [
    'Home' => 'index.php',
    'pakaian' => 'index_pakaian.php',
    'Pesanan' => 'index_pesanan.php',
    'tipe' => 'index_tipe.php'
];


$icons = [
    'Home' => 'house',
    'pakaian' => 'list',
    'Pesanan' => 'fas fa-file-alt',
    'tipe' => 'fas fa-certificate'
];
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <?php foreach($menu as $key => $value): ?> 
                            <a class="nav-link" href="<?= $value?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-<?= $icons[$key] ?>"></i></div>
                                
                                <?= $key ?>
                            </a>
                            <?php endforeach ?> 
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Tata Store
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">