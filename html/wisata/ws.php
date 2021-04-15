<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href='../bismillah/jquery-bar-rating-master/dist/themes/fontawesome-stars.css' rel='stylesheet' type='text/css'>
<!-- Script -->
<script src="../bismillah/jquery-3.0.0.js" type="text/javascript"></script>
<script src="../bismillah/jquery-bar-rating-master/dist/jquery.barrating.min.js" type="text/javascript"></script>
<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Wisata</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="assets/index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Wisata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-0-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-50">
                        <?php
                        $id = $_GET['id'];
                        $sql = $kon->prepare("SELECT * FROM tipe_wisata");
                        $sql->execute();
                        ?>
                        <button class="btn <?= !empty($id) ?: 'active' ?>" onclick="location.href='?kwb=wst&wisata=ws'">All</button>
                        <?php
                        while ($tw = $sql->fetch()) {  
                        ?>
                        <button onclick="location.href='?kwb=wst&wisata=ws&id=<?php echo $tw['id_tipe_wisata'];?>'" class="btn <?= $id != $tw['id_tipe_wisata'] ?: 'active' ?>"><?php echo $tw['tipe_wisata']?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <!-- Single Portfolio Item -->
                        <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM wisata WHERE id_tipe_wisata = '$id'";
                        if(empty($id)){
                            $query = "SELECT * FROM wisata";
                        }
                        $sql = $kon->prepare($query);
                        $sql->execute();

                        while ($gb = $sql->fetch()) {
                        ?>
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item  mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="data_wisata/foto_wisata/<?php echo $gb['image_wisata']?>" alt="Gambar Wisata" style="width: 350px; height: 350px; background-position: center center; background-repeat: no-repeat;">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4><?php echo $gb['nama_wisata']; ?></h4>
                                <?php $desk = $gb['deskripsi_wisata']; ?>
                                <p><?php echo substr ($desk,0,100). " ....."; ?></p>
                                <p><a href="?kwb=wst&wisata=det&id=<?php echo $gb['id_wisata'] ?>" style="color: white;">Baca Selengkapnya</a></p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="data_wisata/foto_wisata/<?php echo $gb['image_wisata']?>" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
                    <?php
                        }
                        // $hitung = $kon->prepare("SELECT COUNT(*) AS ada FROM `wisata` WHERE id_tipe_wisata = $id");
                        // $hitung->execute();
                        // $total = $hitung->fetch();
                        // if($total['ada'] <= 0){
                        //     echo '<div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item mb-30 wow fadeInUp"><p class="text-center">Belum Terdapat Wisata</p></div>';
                        // }
                    ?>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="?kwb=wst&wisata=ws" class="btn akame-btn">Tampil Semua Wisata</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "?kwb=wst&wisata=ws?id_tipe_wisata=${id_tipe_wisata}";
    };
</script> -->
    <script type="text/javascript">
        function myFunction(id_tipe_wisata){
            return window.location.href = `?kwb=wst&wisata=ws?id_tipe_wisata=${id_tipe_wisata}`;
        }
    </script>