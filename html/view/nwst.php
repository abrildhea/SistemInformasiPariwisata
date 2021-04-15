<body>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to Kota Wisata Batu!</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><!-- <i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Sat: 8.00 to 17.00 <span class="mx-2"></span> | -->
                             <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Hubungi: (+62) 898 355 3283</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="https://batukotaku.000webhostapp.com/"><img src="assets/img/logos/logo-batu.png" alt="Logo" width="115"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
        <?php
            // $id_user = $_SESSION['sesion_id'];
            $cho = $kon->prepare("SELECT id_user FROM user WHERE `id_user` = '$_SESSION[email]'");
            $cho->execute([$id_user]);
            $r = $cho->fetch(PDO::FETCH_ASSOC);
        ?>
                                <ul id="nav">
                                    <?php
                                    session_start();
                                    $yoi = $_GET['kwb']; 
                                    if ($_SESSION['email']) {
                                        $email = isset($_SESSION['email']) ? $_SESSION['email'] : null;
                                    ?>
                                    <li class="<?= !empty($yoi) ?: 'active' ?>"><a href="https://batukotaku.000webhostapp.com?email=<?= $email ?>">Home</a></li> 
                                    <li class="<?= $yoi == 'profil' ? 'active' : null ?>"><a href="?kwb=profil&email=<?= $email ?>">Profil</a></li>
                                    <li class="<?= $yoi == 'wst' ? 'active' : null ?>"><a href="?kwb=wst&wisata=ws&email=<?= $email ?>">Wisata</a></li>
                                    <li class="<?= $yoi == 'abouts' ? 'active' : null ?>"><a href="?kwb=abouts&email=<?= $email ?>">Tentang Kami</a></li>
                                    <!-- <li><a href="./blog.html">Blog</a></li> -->
                                    <li class="<?= $yoi == 'contact' ? 'active' : null ?>"><a href="?kwb=contact&email=<?= $email ?>">Kontak</a></li>  
                                    <?php } else { ?>
                                        <li class="<?= !empty($yoi) ?: 'active' ?>"><a href="https://batukotaku.000webhostapp.com/">Home</a></li>
                                    <li class="<?= $yoi == 'profil' ? 'active' : null ?>"><a href="?kwb=profil">Profil</a></li>
                                    <li class="<?= $yoi == 'wst' ? 'active' : null ?>"><a href="?kwb=wst&wisata=ws">Wisata</a></li>
                                    <li class="<?= $yoi == 'abouts' ? 'active' : null ?>"><a href="?kwb=abouts">Tentang Kami</a></li>
                                    <!-- <li><a href="./blog.html">Blog</a></li> -->
                                    <li class="<?= $yoi == 'contact' ? 'active' : null ?>"><a href="?kwb=contact">Kontak</a></li>
                                    <?php } ?>
                                </ul>
                                <!-- Cart Icon -->
                                <!-- <div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div> -->
                                <!-- Book Icon -->
                                <?php
                                if ($_SESSION['email'] == NULL) {
                                ?>
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="?kwb=lg&login=form" class="btn akame-btn">Login</a>
                                </div>
                                <?php }else{ ?>
                                <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="?kwb=dt&det=akun&id=<?php echo $_SESSION[sesion_id]; ?>" class="btn akame-btn">AkunKu</a>
                                </div>
                            <?php } ?>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->