<!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Data Kecamatan
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a onclick="window.history.go(-1); return false;" class="btn btn-clean kt-margin-r-10">
                    <i class="la la-arrow-left"></i>
                    <span class="kt-hidden-mobile">Kembali</span>
                </a>
                <div class="dropdown dropdown-inline">
                    <a href="?admin=kcm&kec=i">
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
        $query = $kon->prepare("select * from kecamatan");
        $query->execute();
        ?>
        <table class="kt-datatable" id="html_table" width="100%">
            <thead>
            <tr>
                <th title="">No</th>
                <th title="">Kecamatan</th>
                <th title="">Aksi</th>
                <th title=""></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            while($kecamatan = $query->fetch()){?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $kecamatan['kecamatan']?></td>
                    <td><a href="?admin=kcm&kec=e&id=<?php echo $kecamatan['id_kecamatan'];?>" title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                            <i class="la la-edit"></i>Edit                      
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="?admin=kcm&kec=hapus&id=<?php echo $kecamatan['id_kecamatan'];?>" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" onclick="return confirm('Apakah Anda Ingin Menghapus ?')">
                            <i class="la la-trash"></i>Hapus                     
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