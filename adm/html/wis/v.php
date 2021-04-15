<!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Data Wisata
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">Kembali</span>
                </a>
                <div class="dropdown dropdown-inline">
                    <a href="?admin=ws&wis=rate">
                    <button type="button" class="btn btn-warning btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-star"></i> Rating Wisata      
                    </button></a>
                    <a href="?admin=ws&wis=i">
                    <button type="button" class="btn btn-brand btn-icon-sm" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon2-plus"></i> Tambah      
                    </button></a>
                </div>
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
            $query = $kon->prepare("SELECT * FROM kecamatan AS k INNER JOIN wisata AS w ON k.id_kecamatan = w.id_kecamatan INNER JOIN tipe_wisata AS t ON w.id_tipe_wisata = t.id_tipe_wisata ORDER BY id_wisata ASC");
            $query->execute();
        ?>
        <table class="kt-datatable" id="html_table" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Tipe Wisata</th>
                <th>Kecamatan</th>
                <th>Alamat</th>
                <th>Kuliner Khas</th>
                <th>Deskripsi Wisata</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while($wisata = $query->fetch()){
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $wisata['nama_wisata']?></td>
                    <td><?php echo $wisata['tipe_wisata']?></td>
                    <td><?php echo $wisata['kecamatan']?></td>
                    <td><?php echo $wisata['alamat']?></td>
                    <td><?php echo $wisata['kuliner_khas']?></td>
                    <td><?php echo $wisata['deskripsi_wisata']?></td>
                    <td><?php echo $wisata['latitude']?></td>
                    <td><?php echo $wisata['longitude']?></td>
                    <td><a href="../../data_wisata/foto_wisata/<?php echo $wisata['image_wisata']?>" style="cursor: zoom-in;" target="blank">
                        <?php echo "<img src='../../data_wisata/foto_wisata/".$wisata['image_wisata']."' width='150px'>"?>
                        </a><br>Klik gambar untuk melihat lebih besar
                    </td>
                    <td><a href="?admin=ws&wis=e&id=<?php echo $wisata['id_wisata'];?>" title="Edit Data" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                            <i class="la la-edit"></i>Edit                      
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="?admin=ws&wis=hapus&id=<?php echo $wisata['id_wisata'];?>" title="Hapus Data" class="btn btn-sm btn-clean btn-icon btn-icon-md" onclick="return confirm('Apakah Anda Ingin Menghapus ?')">
                            <i class="la la-trash"></i>Hapus                     
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="?admin=ws&wis=det&id=<?php echo $wisata['id_wisata'];?>" title="Detail Data" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                            <i class="la la-eye"></i>&nbsp;Detail                     
                        </a></td>
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