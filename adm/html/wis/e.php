<style type="text/css">
	.text-baru{
		color: #dc3545;
		font-weight: bold;
	}
</style>
<?php
$id_wisata = $_GET['id'];
$query = $kon->prepare("select * from wisata where id_wisata = $id_wisata");
$query->execute();
$wisata = $query->fetch();
?>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg" style="">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Form Edit Data Wisata</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
				</div>
			</div>
			<!--begin::Form-->
			<form role="form" action="?admin=ws&wis=edit&id=<?php echo $wisata['id_wisata']; ?>" method="post" enctype="multipart/form-data" class="kt-form kt-form--fit">
				<input type="hidden" name="id_wisata" value="<?= $wisata['id_wisata'] ?>">
	            <div class="kt-portlet__body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label for="exampleSelect1">Kecamatan</label>
	                               <?php
                                        $query = $kon->prepare("SELECT * FROM kecamatan,wisata WHERE kecamatan.id_kecamatan = wisata.id_kecamatan AND wisata.id_wisata = '$id_wisata'");
                                        $query->execute();
                                        $kc = $query->fetch();
                                        ?>
	                            <input disabled="" class="form-control" value="<?php echo $kc['kecamatan'];?>" name="id_kecamatan" type="text" id="id_kecamatan" required>
						</div>
						<div class="col-lg-6">
							<label for="exampleSelect1">Tipe Wisata</label>
									<?php
									$sql2 = $kon->prepare("SELECT * FROM tipe_wisata,wisata WHERE tipe_wisata.id_tipe_wisata = wisata.id_tipe_wisata AND wisata.id_wisata = '$id_wisata'");
									$sql2->execute();
									$tw = $sql2->fetch();
									?>
								</select>
								<input disabled="" class="form-control" value="<?php echo $tw['tipe_wisata'];?>" name="id_tipe_wisata" type="text" id="id_tipe_wisata" required>
						</div>
					</div>	 
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Nama Wisata</label>
							<div class="kt-input-icon">
								<input class="form-control" value="<?php echo $wisata['nama_wisata'];?>" name="nama_wisata" type="text" id="nama_wisata" required>
								<!-- <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span> -->
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Nama Wisata</span>
						</div>
						<div class="col-lg-6">
							<label class="">Alamat</label>
							<div class="kt-input-icon">
								<input name="alamat" type="text" value="<?php echo $wisata['alamat'];?>" id="alamat"class="form-control" placeholder="Alamat" required>
								<!-- <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span> -->
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Alamat Wisata</span>
						</div>
					</div>	 
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Kuliner Khas</label>
							<div class="kt-input-icon">
								<input name="kuliner_khas"value="<?php echo $wisata['kuliner_khas'];?>" id="kuliner_khas" type="text" class="form-control" required>
								<span class="form-text text-baru">*Wajib Mengisi Kuliner Khas Wisata</span>
							</div>
						</div>
						<div class="col-lg-6">
							<label class="">Deskripsi Wisata</label>
							<div class="kt-input-icon">
								<textarea name="deskripsi_wisata" class="form-control" id="deskripsi_wisata" required=""><?php echo $wisata['deskripsi_wisata'];?></textarea>
								<span class="form-text text-baru">*Wajib Mengisi Deskripsi Wisata</span>
							</div>
						</div>
					</div>  
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Latitude</label>
							<div class="kt-input-icon">
								<input name="latitude" type="text" class="form-control" value="<?php echo $wisata['latitude'];?>" id="latitude">
								<span class="form-text text-baru">*Wajib Mengisi Latitude Wisata</span>
							</div>
						</div>
						<div class="col-lg-6">
							<label class="">Longitude</label>
							<div class="kt-input-icon">
								<input name="longitude" type="text" class="form-control" value="<?php echo $wisata['longitude'];?>" id="longitude" required>
								<span class="form-text text-baru">*Wajib Mengisi Longitude Wisata</span>
							</div>
						</div>
					</div>  
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Gambar Wisata</label>
							<div class="kt-input-icon">
								<?php echo "<img src='../../data_wisata/foto_wisata/".$wisata['image_wisata']."' width='200px'>"?><br>
								<!-- GORONG DADI -->
								<input name="image_wisata" type="file">
								<br><span class="form-text text-baru">*Anda Bisa Mengganti Ataupun Tidak Mengganti Gambar Wisata</span>
							</div>
						</div>
					</div>           
	            </div>

	            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
					<div class="kt-form__actions" style="margin-left: 780px;">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-10">
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>	</div>
<!-- end:: Content -->				</div>	
</div>