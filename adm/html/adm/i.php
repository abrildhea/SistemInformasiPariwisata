<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg" style="">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Form Tambah Data Admin</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
				</div>
			</div>
			<!--begin::Form-->
			<form role="form" action="?admin=ad&adm=add" method="post" enctype="multipart/form-data" class="kt-form kt-form--fit">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Nama Admin</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" required name="nama" id="nama">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Email</label>
						<div class="col-lg-9">
							<div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                <input type="email" class="form-control" required name="email" id="email">
                            </div>
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Profil</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" required name="profil" id="profil">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Username</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" required name="username" id="username">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Password</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" required name="password" id="password">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div> 
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Konfirmasi Password</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" required name="konfirmPassword" id="konfirmPassword">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>          
	            </div>
	            <div class="kt-portlet__foot kt-portlet__foot--fit-x">
					<div class="kt-form__actions" style="margin-left: 770px;">
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