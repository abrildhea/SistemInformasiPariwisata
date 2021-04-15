<?php
include "fungsi_indotgl.php"
?>
<style type="text/css">
    i.on{
        font-size: 1.3em;
        color: #edb867;
    }
    i.off{
        font-size: 1.3em;
        color: #d2d2d2;
    }
    .star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 150px;
  height: 30px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
  color: #f7d106;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
.star-rating>input:checked~label,
        .star-rating:not(:checked)>label:hover,
        .star-rating:not(:checked)>label:hover~label {
            color: #f7d106;
        }
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}
</style>
<?php
error_reporting(0);
$id_wisata = $_GET['id'];
$query = $kon->prepare("select * from wisata where id_wisata = $id_wisata");
$query->execute();
$wisata = $query->fetch();
?>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='../bismillah/jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
<!-- Script -->
<script src="../bismillah/jquery-3.0.0.js" type="text/javascript"></script>
<script src="../bismillah/jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $('.rating').barrating({
        theme: 'fontawesome-stars',
        // onSelect: function(value, text, event) {

        //     Get element id by data-id attribute
        //     var el = this;
        //     var el_id = el.$elem.data('id_rating');

        //     rating was selected by a user
        //     if (typeof(event) !== 'undefined') {
                
        //         var split_id = el_id.split("_");

        //         var id_rating = split_id[1];  // id_wisata

        //         AJAX Request
        //         $.ajax({
        //             url: '?kwb=wst&wisata=rating_ajax&id=<?php echo $wisata['id_wisata'] ?>',
        //             type: 'post',
        //             data: {id_wisata:id_wisata,rating_wisata:value},
        //             dataType: 'json',
        //             success: function(data){
        //                 Update average
        //                 var average = data['averageRating'];
        //                 $('#avgrating_'+id_rating).text(average);
        //             }
        //         });
        //     }
        // }
    });
});
</script>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4ozbs8OH7EnteRJxo2vPli7dqo7i-Ync&callback=initMap" async defer></script>
<script type="text/javascript">
    function initMap() {
        var map = new google.maps.Map(document.getElementById('show_maps'), {
          center: {lat: -1.035721, lng: 118.436931},
          zoom: 5
        });
    }
</script> -->
<!-- Breadcrumb Area Start -->
<!-- <section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Detail Wisata</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://localhost/sistem_informasi/"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Wisata</li><li class="breadcrumb-item active" aria-current="page"><?php echo $wisata['nama_wisata'];?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Breadcrumb Area End -->
<section class="akame-about-area section-padding-80-0">
    <div class="container">
    <center><h1><i><?php echo $wisata['nama_wisata']; ?></i></h1></center><br>
        <div class="row align-items-center">

            <!-- About Us Thumbnail -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="about-us-thumbnail mb-80">
                    <?php echo "<img src='data_wisata/foto_wisata/".$wisata['image_wisata']."'>"?>
                    <!-- <img src="assets/img/logos/alun.jpg" alt=""> -->
                </div>
            </div>

            <!-- About Us Content -->
            <div class="col-12 col-lg-6">
                <div class="about-us-content mb-80 pl-4">
                    <h3><!-- Kota Batu<br> -->Kuliner Khas</h3>
                    <!-- <h3><i>De Kleine Zwitserland</i> &amp;</h3> -->
                    <p><?php echo $wisata['kuliner_khas']; ?></p>
                    <span><?php echo $wisata2['tipe_wisata']; ?></span>
                </div>
            </div>

            <!-- Section Heading -->
            <div class="col-12 col-md-6 col-lg-12">
                <div class="section-heading mb-80">
                    <h3>Deskripsi Wisata</h3>
                    <!-- <h3><i><?php echo $wisata['nama_wisata']; ?></i></h3> -->
                    <p><?php echo $wisata['deskripsi_wisata']; ?></p>
                    <!-- <a href="#" class="btn akame-btn active mt-30">Read More</a> -->
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-12">
                <div class="section-heading mb-80">
                    <h4>Tanggal Update Wisata</h4>
                    <p><?php $tanggal = tgl_indo($wisata['tgl']);
                    if ($tanggal == 0) {
                      echo "Belum di update";
                    }else{
                    echo $tanggal;
                    }
                    ?></p>
                    <!-- <a href="#" class="btn akame-btn active mt-30">Read More</a> -->
                </div>
            </div>
            
        </div>
    </div>
</section>

	<!-- Google Maps Start -->
    <!-- <div class="akame-google-maps-area">
        <div id="show_maps" style="width: 100%; height: 100%;"></div>
    </div> -->
    <!-- Google Maps End -->
<?php
if ($_SESSION['email'] == NULL) {
	echo "<br><center><h4>Daftar Akun dan Login Untuk Berkomentar dan Melihat Komentar</h4></center>";
?>
<?php }else{ ?>
	<!-- Testimonial Area Start -->
    <section class="testimonial-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="testimonial-slides owl-carousel">
                    <?php
                        $quer = $kon->prepare("SELECT user.email , komentar.id_wisata , komentar.komentar FROM user JOIN komentar ON komentar.id_user = user.id_user WHERE komentar.id_wisata = '$id_wisata'");
                        $quer->execute();

                        $hitung = $kon->prepare("SELECT COUNT(*) AS ada FROM `komentar` WHERE id_wisata = $id_wisata");
                        $hitung->execute();
                        $total = $hitung->fetch();
                        if($total['ada'] <= 0){
                            echo '<p class="text-center">Belum Terdapat Komentar</p>';
                    ?>
                        
                    <?php }else{
                        while($row = $quer->fetch()) { ?>
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <h2>Komentar</h2>
                            <p><?php echo $row['komentar']; ?></p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <h5><?php echo $row['email'];?></h5>
                            </div>
                        </div>
                    <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->
<!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Komentar &amp; Rating</h2>
                        <?php
                        $query2 = $kon->prepare("SELECT user.email , rating.id_wisata , rating.rating_wisata FROM user JOIN rating ON rating.id_user = user.id_user WHERE rating.id_wisata = '$id_wisata'");
                            $query2->execute();
                            $fetchRating = $query2->fetch();
                            $rating = $fetchRating['rating_wisata'];

                        $query3 = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_wisata='$id_wisata' AND id_user = $_SESSION[sesion_id]");
                        // nek angka 1 ne dihapus dadi bulat (5:2 = 2) , nek ga dihapus ono koma ne (5:2 = 2,5)

                            $query3->execute();
                            $fetchAverage = $query3->fetch();
                            $averageRating = $fetchAverage['averageRating'];

                        $ccek    = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_wisata='$id_wisata' AND id_user = $_SESSION[sesion_id]");
                        $ccek->execute();
                        $num_rows = $ccek->fetchColumn();
                        if ($num_rows <= 0) {
                            echo '<p class="text-center" style="color: #2f2e2e;">Rating Yang Anda Berikan : -</p>';
                        }else{
                            ?>
                            <p style="color: #2f2e2e;">Rating Yang Anda Berikan : <?php echo $num_rows; ?></p>
                        <?php } ?>
                        <?php
                            $query4 = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating2 FROM rating WHERE id_wisata='$id_wisata'");
                        // nek angka 1 ne dihapus dadi bulat (5:2 = 2) , nek ga dihapus ono koma ne (5:2 = 2,5)
                            $query4->execute();
                            $fetchAverage2 = $query4->fetch();
                            $averageRating2 = $fetchAverage2['averageRating2'];

                        if($averageRating <= 0){
                            $averageRating = "-";
                        }
                        if($averageRating2 <= 0){
                            $averageRating2 = "-";
                        }
                        ?>
                        <div class="col-12">
                            <?php
                            if ($averageRating <= 0) { ?>
                            <form action="?kwb=wst&wisata=rating&id=<?php echo $wisata['id_wisata']; ?>" role="form" method="post">
                            <i class="star-rating col-sm-10" id='rating_<?php echo $id_wisata; ?>' data-id='rating_<?php echo $id_wisata; ?>'>
                              <input required type="radio" name="rating_wisata" value="1"><i></i>
                              <input required type="radio" name="rating_wisata" value="2"><i></i>
                              <input required type="radio" name="rating_wisata" value="3"><i></i>
                              <input required type="radio" name="rating_wisata" value="4"><i></i>
                              <input required type="radio" name="rating_wisata" value="5"><i></i>
                            </i><br>
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Kirim Rating<i class="arrow_carrot-right"></i></button><br><br>
                        </form>
                            <?php }else{

                            if ($query3 ->fetchColumn() >= 0) { ?>
                                <form class="rating" action="?kwb=wst&wisata=update&id=<?php echo $wisata['id_wisata']; ?>" role="form" method="post">
                            
                            <i class="star-rating col-sm-10" id='rating_<?php echo $id_wisata; ?>' data-id='rating_<?php echo $id_wisata; ?>'>
                              <input required type="radio" name="rating_wisata" value="1" <?php if (isset($num_rows) && $num_rows == '1') {
                                                                                        echo 'checked';
                                                                                    } ?> /><i></i>
                              <input required type="radio" name="rating_wisata" value="2" <?php if (isset($num_rows) && $num_rows == '2') {
                                                                                        echo 'checked';
                                                                                    } ?> /><i></i>
                              <input required type="radio" name="rating_wisata" value="3" <?php if (isset($num_rows) && $num_rows == '3') {
                                                                                        echo 'checked';
                                                                                    } ?> /><i></i>
                              <input required type="radio" name="rating_wisata" value="4" <?php if (isset($num_rows) && $num_rows == '4') {
                                                                                        echo 'checked';
                                                                                    } ?> /><i></i>
                              <input required type="radio" name="rating_wisata" value="5" <?php if (isset($num_rows) && $num_rows == '5') {
                                                                                        echo 'checked';
                                                                                    } ?> /><i></i>
                            </i><br>
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Update Rating<i class="arrow_carrot-right"></i></button><br><br>
                        </form>
                            <?php } }
                            if ($averageRating <= 0) {
                                $star = '';
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= ceil($averageRating2['rating_wisata'])) {
                                        echo $star = '<i class="icon_star on"></i>';
                                        // $star .= '<span class="on"><i class="icon_star"></i></span>';
                                    } else {
                                        echo $star = '<i class="icon_star off"></i>';
                                        // $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                                    }
                                }
                            ?>
                            <?php } ?>
                            <div style='clear: both;'></div>
                            <p style="color: black;" id='avgrating_<?php echo $id_wisata; ?>'>Rata - Rata Rating : <?php echo $averageRating2; ?></p>

                            <?php
                            $hitungUser = $kon->prepare("SELECT COUNT(id_user) FROM `rating` WHERE id_wisata = $id_wisata");
                            $hitungUser->execute();
                            $num_rows = $hitungUser->fetchColumn();
                            if ($num_rows <= 0) {
                                echo '<p class="text-center" style="color: #2f2e2e;">Jumlah User Yang Memberi Rating : -</p>';
                            }else{
                            ?>
                            <p style="color: #2f2e2e;">Jumlah User Yang Memberi Rating : <?php echo $num_rows; ?></p>
                        <?php } ?>
                            <!-- Set rating -->
                            <script type='text/javascript'>
                            $(document).ready(function(){
                                $('#rating_<?php echo $id_wisata; ?>').barrating('set',<?php echo $rating; ?>);
                            });
                            </script>
                        </div><br>
                        <p>Beri Komentar Tentang Wisata Ini.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="?kwb=wst&wisata=komen&id=<?php echo $wisata['id_wisata']; ?>" enctype="multipart/form-data" method="post" role="form" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <!-- <div class="col-lg-6">
                                <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                            </div> -->
                            <div class="col-12">
                                <textarea name="komentar" class="form-control mb-30" placeholder="Tulis Komentar . . . " required=""></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Kirim Komentar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- <br>
            <div class="row">
                
            </div> -->
        </div>
    </section>
    <!-- Contact Area End -->
<?php } ?>