<?php
$id_wisata = $_GET['id'];
$query = $kon->prepare("select * from wisata where id_wisata = $id_wisata");
$query->execute();
$wisata = $query->fetch();
?>
<head>
<meta charset="utf-8"/>
        <title>Data Wisata <?php echo $wisata['nama_wisata'];?></title>
        <meta name="description" content="abrildheaa">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/brand/light.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

        <script src="../assets/jsprog/jquery.min.js"></script>
        <link rel="shortcut icon" href="../assets/media/logos/images.png" />
</head>
<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <img src="../assets/media/logos/images.png" style="width: 110px; margin-top: 5px; margin-bottom: 5px;">
                    <div class="col-lg-12">
                    <h1 style="color:black; padding-left:102px;">Sistem Informasi Pariwisata Kota Batu</h1>
                    </div>
                </div>
            </div>

            <center><h1 style="color: black; text-decoration: underline; margin-top:20px;" class="kt-portlet__head-title">
            <b>Data Wisata : <?php echo $wisata['nama_wisata']; ?></b></h1></center><br>

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
						<center><div style="margin-top: 15px;">
						<?php echo "<img src='../../data_wisata/foto_wisata/".$wisata['image_wisata']."' class='responsive'>"?>
						</div></center><br>
					</div>	

					<div style="padding-left: 50px">
					<div class="form-group row">
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">&nbsp;</label>
						</div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;">&nbsp;</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">&nbsp;</label>
						</div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;">&nbsp;</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">&nbsp;</label>
						</div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;">&nbsp;</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">&nbsp;</label>
						</div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;">&nbsp;</label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">&nbsp;</label>
						</div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;">&nbsp;</label>
						</div>
					</div>

                        <?php
                            $sql2 = $kon->prepare("SELECT * FROM tipe_wisata,wisata WHERE tipe_wisata.id_tipe_wisata = wisata.id_tipe_wisata AND wisata.id_wisata = '$id_wisata'");
                            $sql2->execute();
                            $tw = $sql2->fetch();
                        ?>
					<div class="form-group row" style="margin-top: -330px;">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Tipe Wisata</label>
						</div>
						<div class="col-sm-1">
                                <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $tw['tipe_wisata'];?></label>
						</div>
					</div>
                    <?php
                        $query = $kon->prepare("SELECT * FROM kecamatan,wisata WHERE kecamatan.id_kecamatan = wisata.id_kecamatan AND wisata.id_wisata = '$id_wisata'");
                        $query->execute();
                        $kc = $query->fetch();
                    ?>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Kecamatan</label>
						</div>
						<div class="col-sm-1">
                                <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $kc['kecamatan'];?></label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Nama Wisata</label>
						</div>
						<div class="col-sm-1">
                                <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $wisata['nama_wisata'];?></label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Alamat</label>
						</div>
						<div class="col-sm-1">
                                <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $wisata['alamat'];?></label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Kuliner Khas</label>
						</div>
						<div class="col-sm-1">
                                <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-5">
							<label style="font-size:25px; color: black;"><?php echo $wisata['kuliner_khas'];?></label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Latitude</label>
						</div>
						<div class="col-sm-1">
                            <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $wisata['latitude'];?>, <?php echo $formats;?></label>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Longitude</label>
						</div>
						<div class="col-sm-1">
                            <label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $wisata['longitude'];?></label>
						</div>
					</div>
                    <?php
                        $queryy = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_wisata = '$id_wisata'");
                        $queryy->execute();
                        $rtg = $queryy->fetch();
                        $averageRating = $rtg['averageRating'];

                        if($averageRating <= 0){
                            $averageRating = "-";
                        }
                    ?>
					<div class="form-group row">
						<div class="col-sm-3">
							<label style="font-size:25px; color: black;" class="">Rata - Rata Rating Wisata</label>
						</div>
						<div class="col-sm-1">
							<label style="font-size:25px; color: black;" class="">:</label>
                        </div>
						<div class="col-sm-6">
							<label style="font-size:25px; color: black;"><?php echo $averageRating;?></label>
						</div>
					</div>
                    
                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style="">
                        <?php
                            $query = $kon->prepare("SELECT * FROM komentar,user WHERE komentar.id_user = user.id_user AND komentar.id_wisata = $id_wisata ORDER BY id_wisata ASC");
                            $query->execute();
                        ?>
                        <h2 style="color:black;">Data Komentar User :</h2>
                        <table class="table table-bordered" style="border: 1px solid black;">
                        <thead>
                            <tr>
                                <th><label style="font-size:20px; color: black;" class="">No</label></th>
                                <th><label style="font-size:20px; color: black;">Nama User</label></th> 
                                <th><label style="font-size:20px; color: black;">Komentar</label></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            while($wisata = $query->fetch()){
                        ?>
                            <tr>
                                <td><label style="font-size:20px; color: black;" class=""><?php echo $no;?></label></td>
                                <td><label style="font-size:20px; color: black;"><?php echo $wisata['nama_lengkap']?></label></td>
                                <td><label style="font-size:20px; color: black;"><?php echo $wisata['komentar']?></label></td>
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
<script>
    window.print();
</script>