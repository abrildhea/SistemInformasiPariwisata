<?php
$id_admin = $_GET['id'];
$cho = $kon->prepare("SELECT * FROM admin WHERE `id_admin` = $id_admin");
$cho->execute([$id_admin]);
$admin = $cho->fetch(PDO::FETCH_ASSOC);
?>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg" style="">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">Informasi Akun Admin</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
	                    <i class="la la-arrow-left"></i>
	                    <span class="kt-hidden-mobile">Kembali</span>
	                </a>
	                <!-- <div class="dropdown dropdown-inline">
                    <a href="?admin=ad&adm=e&id=<?php echo $admin['id_admin'];?>">
                    <button type="button" class="btn btn-warning btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-pen"></i> Update Akun      
                    </button></a>
                </div> -->
				</div>
			</div>
			<!--begin::Form-->
			<form role="form" action="" method="" enctype="multipart/form-data" class="kt-form kt-form--fit">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Nama Admin</label>
						<div class="col-lg-9">
							<input readonly class="form-control" type="text" required value="<?php echo $admin['nama'];?>">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Email</label>
						<div class="col-lg-9">
							<div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                <input readonly type="text" class="form-control" required value="<?php echo $admin['email'];?>" aria-describedby="basic-addon1">
                            </div>
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Profil</label>
						<div class="col-lg-9">
							<input readonly class="form-control" type="text" required value="<?php echo $admin['profil'];?>">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Username</label>
						<div class="col-lg-9">
							<input readonly class="form-control" type="text" required value="<?php echo $admin['username'];?>">
							<!-- <span class="form-text text-muted">Please enter your full name</span> -->
						</div>
					</div>
					<!--<div class="form-group row">-->
					<!--	<label class="col-lg-3 col-form-label">Password</label>-->
					<!--	<div class="col-lg-9">-->
					<!--		<input readonly class="form-control" type="text" required -->
					<!--		value="<?php echo $admin['password'];?>">-->
					<!--		 <span class="form-text text-muted">Please enter your full name</span> -->
					<!--	</div>-->
					<!--</div>           -->
	            </div>
	            <!-- <div class="kt-portlet__foot kt-portlet__foot--fit-x">
					<div class="kt-form__actions" style="margin-left: 810px;">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-10">
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div> -->
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>	</div>
<!-- end:: Content -->				</div>	
</div>