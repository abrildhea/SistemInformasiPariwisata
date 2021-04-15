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
					<h3 class="kt-portlet__head-title">Form Tambah Data Tipe Wisata</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
				</div>
			</div>
			<!--begin::Form-->
			<form role="form" action="?admin=twst&tp_wisata=add" method="post" enctype="multipart/form-data" class="kt-form kt-form--fit">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Tipe Wisata</label>
						<div class="col-lg-9">
							<input class="form-control" name="tipe_wisata" type="text" id="tipe_wisata" required>
							<span class="form-text text-baru">*Wajib Mengisi Tipe Wisata</span>
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