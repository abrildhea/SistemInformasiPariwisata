<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Data User Komentar
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
        <?php
        $query = $kon->prepare("SELECT * FROM user");
        $query->execute();
        ?>
        <table class="kt-datatable" id="html_table" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Email</th>
                <th>Username</th>
                <th>Foto</th>
                <th>Aksi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while($user = $query->fetch()){?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $user['nama_lengkap']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['username']?></td>
                    <?php 
                    if (empty($user['image_user'])) {
                    ?>
                    <td>Belum Terdapat Foto</td>
                    <?php } else{ ?>
                    <td><a href="../../data_user/foto_user/<?php echo $user['image_user']?>" style="cursor: zoom-in;" target="blank">
                        <?php echo "<img src='../../data_user/foto_user/".$user['image_user']."' width='100px'>"?>
                        </a><br>Klik gambar untuk melihat lebih besar
                    </td>
                    <?php } ?>
                    <td><a href="?admin=us&usr=det&id=<?php echo $user['id_user'];?>" title="Edit details" class="btn btn-sm btn-clean btn-icon-md">Detail Komentar</a></td>
                </tr>
            <?php 
            $no++; }
            ?>
            </tbody>
        </table>
    </div>
</div>  </div>
<!-- end:: Content -->              </div>  
</div>