<style type="text/css">
	.text-baru{
		color: #dc3545;
		font-weight: bold;
	}
</style>
<?php
$id_kecamatan = $_GET['id'];
$query = $kon->prepare("select * from kecamatan where id_kecamatan = $id_kecamatan");
$query->execute();
$kecamatan = $query->fetch();
?>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg" style="">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Form Edit Data Kecamatan</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
				</div>
			</div>
			<!--begin::Form-->
			<form role="form" action="?admin=kcm&kec=edit&id=<?php echo $kecamatan['id_kecamatan']; ?>" method="post" enctype="multipart/form-data" class="kt-form kt-form--fit">
				<input type="hidden" name="id_kecamatan" value="<?= $kecamatan['id_kecamatan'] ?>">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Kecamatan</label>
						<div class="col-lg-9">
							<input class="form-control" value="<?php echo $kecamatan['kecamatan'];?>" name="kecamatan" type="text" id="kecamatan" required>
							<span class="form-text text-baru">*Wajib Mengisi Nama Kecamatan</span>
						</div>
					</div>           
	            </div>
	            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
					<div class="kt-form__actions" style="margin-left: 810px;">
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