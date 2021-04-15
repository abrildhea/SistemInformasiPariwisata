<style type="text/css">
	.text-baru{
		color: #dc3545;
		font-weight: bold;
	}
</style>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg" style="">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Form Tambah Data Wisata</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
				</div>
			</div>
			<form role="form" action="?admin=ws&wis=add" method="post" enctype="multipart/form-data" class="kt-form kt-form--label-right">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label for="exampleSelect1">Kecamatan</label>
								<select name="id_kecamatan" class="form-control" required>
									<option>Pilih Kecamatan</option>
									<?php
									$sql = $kon->prepare("SELECT * FROM kecamatan ORDER BY kecamatan");
									$sql->execute();

									while($row = $sql->fetch()) { ?>
									    <option value="<?php echo $row['id_kecamatan']; ?>">
                                            <?php echo $row['kecamatan']; ?>
                                        </option>
                                        <?php } ?>
								</select>
								<span class="form-text text-baru">*Wajib Memilih Kecamatan</span>
						</div>
						<div class="col-lg-6">
							<label for="exampleSelect1">Tipe Wisata</label>
								<select name="id_tipe_wisata" class="form-control" required>
									<option>Pilih Tipe Wisata</option>
									<?php
									$sql2 = $kon->prepare("SELECT * FROM tipe_wisata ORDER BY tipe_wisata");
									$sql2->execute();

									while($row2 = $sql2->fetch()) { ?>
									    <option value="<?php echo $row2['id_tipe_wisata']; ?>">
                                            <?php echo $row2['tipe_wisata']; ?>
                                        </option>
                                        <?php } ?>
								</select>
								<span class="form-text text-baru">*Wajib Memilih Tipe Wisata</span>
						</div>
					</div>	 
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Nama Wisata</label>
							<div class="kt-input-icon">
								<input name="nama_wisata" type="text" class="form-control" placeholder="Nama Wisata" required>
								<!-- <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span> -->
							</div>
							 <span class="form-text text-baru">*Wajib Mengisi Nama Wisata</span> 
						</div>
						<div class="col-lg-6">
							<label class="">Alamat</label>
							<div class="kt-input-icon">
								<input name="alamat" type="text" class="form-control" placeholder="Alamat" required>
								<!-- <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span> -->
							</div>
							 <span class="form-text text-baru">*Wajib Mengisi Alamat Wisata</span> 
						</div>
					</div>	 
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Kuliner Khas</label>
							<div class="kt-input-icon">
								<input name="kuliner_khas" type="text" class="form-control" placeholder="Kuliner Khas" required>
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Kuliner Khas Wisata</span>
						</div>
						<div class="col-lg-6">
							<label class="">Deskripsi Wisata</label>
							<div class="kt-input-icon">
								<textarea name="deskripsi_wisata" class="form-control" placeholder="Deskripsi Wisata" required></textarea>
								<span class="form-text text-baru">*Wajib Mengisi Deskripsi Wisata</span>
							</div>
						</div>
					</div>  
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Latitude</label>
							<div class="kt-input-icon">
								<input name="latitude" type="text" class="form-control" placeholder="Latitude" required>
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Latitude Wisata</span>
						</div>
						<div class="col-lg-6">
							<label class="">Longitude</label>
							<div class="kt-input-icon">
								<input name="longitude" type="text" class="form-control" placeholder="Longitude" required>
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Longitude Wisata</span>
						</div>
					</div>  
					<div class="form-group row">
						<div class="col-lg-6">
							<label>Gambar Wisata</label>
							<div class="kt-input-icon">
								<input name="image_wisata" type="file" required>
							</div>
							<span class="form-text text-baru">*Wajib Mengisi Gambar Wisata</span>
						</div>
					</div>           
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions" style="margin-left: 840px;">
						<div class="row">
							<div class="col-lg-12">
								<button type="submit" class="btn btn-success">Save</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
							<!-- <div class="col-lg-6 kt-align-right">
								<button type="reset" class="btn btn-danger">Delete</button>
							</div> -->
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