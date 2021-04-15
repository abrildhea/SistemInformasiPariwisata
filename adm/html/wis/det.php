<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <?php
    $id_wisata = $_GET['id'];
    $query = $kon->prepare("select * from wisata where id_wisata = $id_wisata");
    $query->execute();
    $wisata = $query->fetch();
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <!-- <img src="../assets/media/logos/logo-batu.png" style="width: 100px; margin-top: 5px; margin-bottom: 5px;"> -->
                        <center><h1 class="kt-portlet__head-title">
                        <b>Data Wisata <?php echo $wisata['nama_wisata']; ?></b></h1></center><br>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
                                <i class="la la-arrow-left"></i>
                                <span class="kt-hidden-mobile">Kembali</span>
                            </a>
                            <div class="dropdown dropdown-inline">
                                <a href="?admin=ct&cetak=c&id=<?php echo $wisata['id_wisata'];?>" target="blank">
                                <button type="button" class="btn btn-brand btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon2-print"></i> Print      
                                </button></a>
                            </div>
                        </div>      
                    </div>
                </div>
                    <div class="kt-portlet__body">
                        <div class="col-sm-12">
                            <style type="text/css">
                                .responsive{
                                width: 190%;
                                max-width: 470px;
                                height: auto;
                                min-height: 322px;
                                }
                            </style>
                            <center><div>
                            <?php echo "<img src='../../data_wisata/foto_wisata/".$wisata['image_wisata']."' class='responsive'>"?>
                            </div></center><br>
                        </div>	

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Tipe Wisata</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                            <?php
                                $sql2 = $kon->prepare("SELECT * FROM tipe_wisata,wisata WHERE tipe_wisata.id_tipe_wisata = wisata.id_tipe_wisata AND wisata.id_wisata = '$id_wisata'");
                                $sql2->execute();
                                $tw = $sql2->fetch();
                            ?>
                                <label style="font-size:15px; color: black;"><?php echo $tw['tipe_wisata'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Kecamatan</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                            <?php
                                $query = $kon->prepare("SELECT * FROM kecamatan,wisata WHERE kecamatan.id_kecamatan = wisata.id_kecamatan AND wisata.id_wisata = '$id_wisata'");
                                $query->execute();
                                $kc = $query->fetch();
                            ?>
                                <label style="font-size:15px; color: black;"><?php echo $kc['kecamatan'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Nama Wisata</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                                <label style="font-size:15px; color: black;"><?php echo $wisata['nama_wisata'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Alamat</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                                <label style="font-size:15px; color: black;"><?php echo $wisata['alamat'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Kuliner Khas</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                                <label style="font-size:15px; color: black;"><?php echo $wisata['kuliner_khas'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Latitude</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                                <label style="font-size:15px; color: black;"><?php echo $wisata['latitude'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Longitude</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                                <label style="font-size:15px; color: black;"><?php echo $wisata['longitude'];?></label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label style="font-size:15px; color: black;" class="">Rata - Rata Rating Wisata</label>
                            </div>
                            <div class="col-lg-1">
                                <label style="font-size:15px; color: black;" class="">:</label>
                            </div>
                            <div class="col-lg-6">
                            <?php
                                $queryy = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_wisata = '$id_wisata'");
                                $queryy->execute();
                                $rtg = $queryy->fetch();
                                $averageRating = $rtg['averageRating'];

                                if($averageRating <= 0){
                                    $averageRating = "-";
                                }
                            ?>
                                <label style="font-size:15px; color: black;"><?php echo $averageRating;?></label>
                            </div>
                        </div>
                        
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style="">
                            <?php
                                $query = $kon->prepare("SELECT * FROM komentar,user WHERE komentar.id_user = user.id_user AND komentar.id_wisata = $id_wisata ORDER BY id_wisata ASC");
                                $query->execute();
                            ?>
                            <h4 style="color:black;">Data Komentar User :</h4>
                            <table class="table table-bordered" style="border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th><label style="font-size:15px; color: black;" class="">No</label></th>
                                    <th><label style="font-size:15px; color: black;">Nama User</label></th> 
                                    <th><label style="font-size:15px; color: black;">Komentar</label></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                while($wisata = $query->fetch()){
                            ?>
                                <tr>
                                    <td><label style="font-size:15px; color: black;" class=""><?php echo $no;?></label></td>
                                    <td><label style="font-size:15px; color: black;"><?php echo $wisata['nama_lengkap']?></label></td>
                                    <td><label style="font-size:15px; color: black;"><?php echo $wisata['komentar']?></label></td>
                                </tr>
                            <?php 
                                $no++; }
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>