<?php
$id_user = $_GET['id'];
$query = $kon->prepare("select * from user where id_user = $id_user");
$query->execute();
?>
<!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Data Komentar User
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">Kembali</span>
                </a>
            </div>      
        </div>
    </div>

    <div class="kt-portlet__body">
        <!--begin: Search Form -->
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
            <div class="row align-items-center">                
                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-input-icon kt-input-icon--left">
                        <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                            <span><i class="la la-search"></i></span>
                        </span>
                    </div>
                </div>
                            </div>
        </div>
    </div>
</div>      <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">
        <!--begin: Datatable -->
        <?php
        $query = $kon->prepare("SELECT * FROM wisata AS w INNER JOIN komentar AS k ON w.id_wisata = k.id_wisata WHERE k.id_user = '$id_user'");
        $query->execute();
        ?>
        <table class="kt-datatable" id="html_table" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Komentar</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while($user = $query->fetch()){?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $user['nama_wisata']?></td>
                    <td><?php echo $user['komentar']?></td>
                </tr>
            <?php 
            $no++; }
            ?>
            </tbody>
        </table>
        <!--end: Datatable -->
    </div>
</div>  </div>
<!-- end:: Content -->              </div>  
</div>