<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8"/>

        <title>Login User</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="adm/html/assets/css/demo1/pages/login/login-6.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="adm/html/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="adm/html/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="adm/html/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="adm/html/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="adm/html/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="adm/html/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="adm/assets/media/logos/images.png" />
                    <!-- Hotjar Tracking Code for keenthemes.com -->
            <script>
                (function(h,o,t,j,a,r){
                    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                    h._hjSettings={hjid:1070954,hjsv:6};
                    a=o.getElementsByTagName('head')[0];
                    r=o.createElement('script');r.async=1;
                    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                    a.appendChild(r);
                })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
            </script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-37564768-1');
            </script>
            </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
        <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
        <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
            <div class="kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__body">
                        <div class="kt-login__logo">
                            <a href="#">
                                <img src="adm/assets/media/logos/images.png" style="height: 100px;">
                            </a>
                        </div>

                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title" style=" margin-top: -20px;">Login User</h3>
                            </div>
                            <div class="kt-login__form" style=" margin-top: 25px;">
                                <form class="kt-form" action="?kwb=lg&login=cek_login" method="post" role="form">
                                    <div class="form-group">
                                        <input required class="form-control" type="email" placeholder="email" name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control form-control" type="password" placeholder="password" name="password"><br>
                                        <div class="hide-show">
                                        <span>Show Password
                            <!-- <i class="fa fa-eye"></i> -->
                        </span></div>
                                    </div>
                                    <div class="kt-login__extra">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="remember"> Remember me
                                            <span></span>
                                        </label>
                                        <!-- <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a> -->
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="" class="btn btn-brand btn-pill btn-elevate" type="submit">Login</button>
                                        <button onclick="location.href='../sistem_informasi/'" class="btn btn-outline-brand btn-pill">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title" style=" margin-top: -20px;">Daftar Akun</h3>
                                <div class="kt-login__desc">Inputkan Data Dengan Benar !</div>
                            </div>
                            <div class="kt-login__form">
                                <form class="kt-form" action="?kwb=lg&login=daftar" enctype="multipart/form-data" method="post" role="form">
                                    <div class="form-group">
                                        <input required class="form-control" type="text" placeholder="Nama" name="nama_lengkap" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control" type="text" placeholder="Username" name="username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control form-control" type="password" placeholder="Konfirmasi Password" name="konfirmPassword">
                                    </div><br>
                                    <div class="form-group">
                                            <label>Foto :</label>
                                        <input required type="file" name="image_user">
                                    </div>
                                    <div class="kt-login__extra">
                                        <label class="kt-checkbox">
                                            <input type="checkbox" name="agree"> I Agree the<!--  <a href="#"> -->terms and conditions<!-- </a> -->.
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="" type="submit" class="btn btn-brand btn-pill btn-elevate">Daftar</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <div class="kt-login__form">
                                <form class="kt-form" action="#">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="copyright">
                        2014 &copy; Rapido by cliptheme.
                    </div> -->
                <div class="kt-login__account" style=" margin-top: -30px;">
                    <span class="kt-login__account-msg">
                        Belum Punya Akun ?
                    </span>&nbsp;
                    <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Daftar Disini!</a>
                </div>
            </div>
        </div>

        <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(adm/assets/media/logos/yy.jpg);">
            <div class="kt-login__section">
                <div class="kt-login__block">
                    <h3 class="kt-login__title">Kota Apel<br><i>De Kleine Zwitserland</i></h3>
                    <div class="kt-login__desc">
                        Daftar Akun dan Login untuk melihat komentar
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    
<!-- end:: Page -->


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
                   <script src="adm/html/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
                   <script src="adm/html/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="adm/html/assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->

</html>
<script type="text/javascript">
    $(function(){
  $('.hide-show').show();
  $('.hide-show span').addClass('show')
  
  $('.hide-show span').click(function(){
    if( $(this).hasClass('show') ) {
      $(this).text('Hide');
      $('input[name="password"]').attr('type','text');
      $(this).removeClass('show');
    } else {
       $(this).text('Show');
       $('input[name="password"]').attr('type','password');
       $(this).addClass('show');
    }
  });
    
    $('form button[type="submit"]').on('click', function(){
        $('.hide-show span').text('Show').addClass('show');
        $('.hide-show').parent().find('input[name="password"]').attr('type','password');
    }); 
});
</script>