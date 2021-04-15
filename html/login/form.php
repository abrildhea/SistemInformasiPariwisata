<?php
session_start();
$email = $_SESSION['email'];

session_destroy();
?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

        <meta charset="utf-8">

        <title>Login User</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">    
        <!--begin::Page Custom Styles(used by this page) -->
                 <link href="adm/html/assets/css/demo1/pages/login/login-1.css" rel="stylesheet" type="text/css">
            <!--end::Page Custom Styles -->

<!--begin::Global Theme Styles(used by all pages) -->
        <link href="adm/html/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css">
        <link href="adm/html/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->
        
<link href="adm/html/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css">
<link href="adm/html/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css">
<link href="adm/html/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css">
<link href="adm/html/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css">        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="adm/assets/media/logos/images.png">
            <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script>
                (function(h,o,t,j,a,r){
                    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                    h._hjSettings={hjid:1070954,hjsv:6};
                    a=o.getElementsByTagName('head')[0];
                    r=o.createElement('script');r.async=1;
                    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                    a.appendChild(r);
                })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
            </script><script async="" src="https://static.hotjar.com/c/hotjar-1070954.js?sv=6"></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-37564768-1');
            </script>
            <script async="" src="https://script.hotjar.com/modules.8d61e969c7deff2570c5.js" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed">
        <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
        <!--begin::Aside-->
        <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/logos/alun.jpg);">
            <!-- <div class="kt-grid__item">
                    <img src="adm/assets/media/logos/logo.png" style="height: 60px;">
            </div> -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                <div class="kt-grid__item kt-grid__item--middle" style="color: black;">
                    <h3 class="kt-login__title">Welcome to Kota Wisata Batu!<br>
                        <!-- Kota Apel --><br><i>De Kleine Zwitserland</i></h3>
                    <h4 class="kt-login__subtitle">Daftar &amp; Login Untuk Berkomentar &amp; Melihat Komentar.</h4>
                </div>
            </div>
            <!-- <div class="kt-grid__item">
                <div class="kt-login__info">
                    <div class="kt-login__copyright">
                        © 2018 Kota Wisata Batu
                    </div>
                    <div class="kt-login__menu">
                        <a href="#" class="kt-link">Privacy</a>
                        <a href="#" class="kt-link">Legal</a>
                        <a href="#" class="kt-link">Contact</a>
                    </div>
                </div>
            </div> -->
        </div>
        <!--begin::Aside-->

        <!--begin::Content-->
        <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
            <!--begin::Head-->
            <div class="kt-login__head">
                <span class="kt-login__signup-label">Belum Punya Akun?</span>&nbsp;&nbsp;
                <a href="?kwb=lg&login=dft" class="kt-link kt-login__signup-link">Daftar Disini!</a>
            </div>
            <!--end::Head-->

            <!--begin::Body-->
            <div class="kt-login__body">

                <!--begin::Signin-->
                <div class="kt-login__form">
                    <div class="kt-login__logo">
                                <center><img src="adm/assets/media/logos/images.png" style="height: 115px;"></center><br>
                        </div>
                    <div class="kt-login__title">
                        <h3>Login User</h3>
                    </div>

                    <!--begin::Form-->
                    <form class="kt-form" action="?kwb=lg&login=cek_login" method="post" role="form">
                        <div class="form-group">
                            <input required class="form-control" type="email" placeholder="email" name="email" autocomplete="off" value="<?= $email ?>">
                        </div>
                        <div class="form-group">
                            <input required class="form-control form-control" type="password" placeholder="password" name="password"><br>
                             <div class="hide-show">
                            <span>Show Password<!-- <i class="fa fa-eye"></i> --></span></div> <!-- SEMENTARA SAMPEK MARI UJIAN TA -->
                        </div><!-- <br> -->
                        <!-- <div class="kt-login__extra">
                            <label class="kt-checkbox">
                                <input type="checkbox" name="remember"> Remember me
                                <span></span>
                            </label>
                            <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
                        </div> -->
                        <div class="kt-login__actions">
                            <button id="" class="btn btn-brand btn-pill btn-elevate" type="submit">Login</button>
                            <button onclick="location.href='https://batukotaku.000webhostapp.com/'" class="btn btn-outline-brand btn-pill">Kembali</button>
                        </div>
                    </form>
                    <!--end::Form-->

                    <!--begin::Divider-->
                    <!-- <div class="kt-login__divider">
                        <div class="kt-divider">
                            <span></span>
                            <span>OR</span>
                            <span></span>
                        </div>
                    </div> -->
                    <!--end::Divider-->

                    <!--begin::Options-->
                    <!-- <div class="kt-login__options">
                        <a href="#" class="btn btn-primary kt-btn">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </a>

                        <a href="#" class="btn btn-info kt-btn">
                            <i class="fab fa-twitter"></i>
                            Twitter
                        </a>

                        <a href="#" class="btn btn-danger kt-btn">
                            <i class="fab fa-google"></i>
                            Google
                        </a>
                    </div> -->
                    <!--end::Options-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Content-->
    </div>
</div>
    </div>
    
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="adm/html/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
                   <script src="adm/html/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="adm/html/assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
</body>
</html>
<script type="text/javascript">
    $(function(){
  $('.hide-show').show();
  $('.hide-show span').addClass('show')
  
  $('.hide-show span').click(function(){
    if( $(this).hasClass('show') ) {
      $(this).text('Hide Password');
      $('input[name="password"]').attr('type','text');
      $(this).removeClass('show');
    } else {
       $(this).text('Show Password');
       $('input[name="password"]').attr('type','password');
       $(this).addClass('show');
    }
  });
    
    $('form button[type="submit"]').on('click', function(){
        $('.hide-show span').text('Show Password').addClass('show');
        $('.hide-show').parent().find('input[name="password"]').attr('type','password');
    }); 
});
</script>