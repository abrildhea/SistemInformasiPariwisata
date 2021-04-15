<?php
case 'add':
            $id_admin = $_SESSION['sesi_id'];
            $id_kecamatan = $_POST['id_kecamatan'];
            $id_tipe_wisata = $_POST['id_tipe_wisata'];
            $nama_wisata = $_POST['nama_wisata'];
            $alamat = $_POST['alamat'];
            $kuliner_khas = $_POST['kuliner_khas'];
            $deskripsi_wisata = $_POST['deskripsi_wisata'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];

            $image_wisata = $_FILES['image_wisata']['name'];
            $tmp = $_FILES['image_wisata']['tmp_name'];

            // Rename nama image_wisatanya dengan menambahkan tanggal dan jam upload
            $image_wisatabaru = date('dmYHis').$image_wisata;

            // Set path folder tempat menyimpan image_wisatanya
            $path = "../assets/media/images/".$image_wisatabaru;

            // Proses upload
            if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak  
            // Proses simpan ke Database
            try {
            $sql = "INSERT INTO wisata SET id_admin = :id_admin, id_kecamatan = :id_kecamatan, id_tipe_wisata = :id_tipe_wisata, nama_wisata = :nama_wisata, alamat = :alamat, kuliner_khas = :kuliner_khas, deskripsi_wisata = :deskripsi_wisata, latitude = :latitude, longitude = :longitude, image_wisata = :image_wisata";
            $stmt = $kon->prepare($sql);
            $stmt->bindParam(':id_admin', $id_admin);
            $stmt->bindParam(':id_kecamatan', $id_kecamatan);
            $stmt->bindParam(':id_tipe_wisata', $id_tipe_wisata);
            $stmt->bindParam(':nama_wisata', $nama_wisata);
            $stmt->bindParam(':alamat', $alamat);
            $stmt->bindParam(':kuliner_khas', $kuliner_khas);
            $stmt->bindParam(':deskripsi_wisata', $deskripsi_wisata);
            $stmt->bindParam(':latitude', $latitude);
            $stmt->bindParam(':longitude', $longitude);
            $stmt->bindParam(':image_wisata', $image_wisatabaru);
            $stmt->execute(); // Eksekusi query insert
        }
            catch(PDOException $e) {
                    echo $e->getMessage();
                }
            if($stmt){
                echo "<script type=\"text/javascript\">alert('Berhasil Disimpan');document.location='?admin=ws&wis=v';</script>";
            }
        }else{
            echo "<script type=\"text/javascript\">alert('Gambar Gagal Disimpan');document.location='?admin=ws&wis=v';</script>";
        }
        break;

        case 'edit':
    $id = $_GET['id'];
    // $id_admin = $_SESSION['sesi_id'];
    // $id_kecamatan = $_POST['id_kecamatan'];
    // $id_tipe_wisata = $_POST['id_tipe_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $alamat = $_POST['alamat'];
    $kuliner_khas = $_POST['kuliner_khas'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $image_wisata = $_FILES['image_wisata']['name'];
    $tmp = $_FILES['image_wisata']['tmp_name'];

    // Cek apakah user ingin mengubah fotonya atau tidak
    if(empty($image_wisata)){ // Jika user tidak memilih file foto pada form
        // Lakukan proses update tanpa mengubah fotonya
        // Proses ubah data ke Database
        $sql = $kon->prepare("UPDATE wisata SET nama_wisata = :nama_wisata, alamat = :alamat, kuliner_khas = :kuliner_khas, deskripsi_wisata = :deskripsi_wisata, latitude = :latitude, longitude = :longitude WHERE id_wisata = :id");
            // $sql->bindParam(':id_admin', $id_admin);
            // $sql->bindParam(':id_kecamatan', $id_kecamatan);
            // $sql->bindParam(':id_tipe_wisata', $id_tipe_wisata);
            $sql->bindParam(':nama_wisata', $nama_wisata);
            $sql->bindParam(':alamat', $alamat);
            $sql->bindParam(':kuliner_khas', $kuliner_khas);
            $sql->bindParam(':deskripsi_wisata', $deskripsi_wisata);
            $sql->bindParam(':latitude', $latitude);
            $sql->bindParam(':longitude', $longitude);
            $sql->bindParam(':id_wisata', $id);
            $execute = $sql->execute(); // Eksekusi query insert

            if ($sql) {
                echo "<script type=\"text/javascript\">alert('Berhasil Edit Tanpa Gambar');document.location='?admin=ws&wis=v';</script>";
            }else{
                echo "<script type=\"text/javascript\">alert('Gagal Edit Tanpa Gambar');document.location='?admin=ws&wis=v';</script>";
            }
        }else{ // Jika user memilih foto / mengisi input file foto pada form
            // Rename nama image_wisatanya dengan menambahkan tanggal dan jam upload
            $image_wisatabaru = date('dmYHis').$image_wisata;

            // Set path folder tempat menyimpan image_wisatanya
            $path = "../assets/media/images/".$image_wisatabaru;

            // proses upload
            if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
                // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
                $sql = $kon->prepare("SELECT image_wisata FROM wisata WHERE id_wisata = :id");
                $sql->bindParam(':id_wisata', $id);
                $sql->execute();
                $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql

                // Cek apakah file foto sebelumnya ada di folder images
                if (is_file("../assets/media/images/".$data['image_wisata'])) { // Jika foto ada
                    unlink("../assets/media/images/".$data['image_wisata']); // Hapus file foto sebelumnya yang ada di folder images

                    // Proses ubah data ke Database
                    $sql = $kon->prepare("UPDATE wisata SET nama_wisata = :nama_wisata, alamat = :alamat, kuliner_khas = :kuliner_khas, deskripsi_wisata = :deskripsi_wisata, latitude = :latitude, longitude = :longitude, image_wisata = :image_wisata WHERE id_wisata = :id");
                    // $sql->bindParam(':id_admin', $id_admin);
                    // $sql->bindParam(':id_kecamatan', $id_kecamatan);
                    // $sql->bindParam(':id_tipe_wisata', $id_tipe_wisata);
                    $sql->bindParam(':nama_wisata', $nama_wisata);
                    $sql->bindParam(':alamat', $alamat);
                    $sql->bindParam(':kuliner_khas', $kuliner_khas);
                    $sql->bindParam(':deskripsi_wisata', $deskripsi_wisata);
                    $sql->bindParam(':latitude', $latitude);
                    $sql->bindParam(':longitude', $longitude);
                    $sql->bindParam(':image_wisata', $image_wisatabaru);
                    $sql->bindParam(':id_wisata', $id);
                    $execute = $sql->execute(); // Eksekusi query insert

                    if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
                        echo "<script type=\"text/javascript\">alert('Berhasil Edit Dengan Gambar');document.location='?admin=ws&wis=v';</script>";
                    }else{
                        echo "<script type=\"text/javascript\">alert('Gagal Edit Dengan Gambar');document.location='?admin=ws&wis=v';</script>";
                    }
                }else{
                    // Jika gambar gagal diupload, Lakukan :
                    echo "<script type=\"text/javascript\">alert('Gambar gagal di upload');document.location='?admin=ws&wis=v';</script>";
                }
            }
        }
        break;
        ?>

        <?php
                        $id = $_GET['id'];
                        $sql = $kon->prepare("SELECT * FROM wisata WHERE id_tipe_wisata = '$id'");
                        $sql->execute();
                        while ($gb = $sql->fetch()) {
                        ?>
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item  mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="adm/assets/media/images/<?php echo $gb['image_wisata']?>" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4><?php echo $gb['nama_wisata']; ?></h4>
                                <p><?php echo $gb['deskripsi_wisata']; ?></p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="adm/assets/media/images/<?php echo $gb['image_wisata']?>" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
                    <?php
                        }
                    ?>

                    <h4 class="kt-portlet__head-title">
        <table>
            <?php
            $query3 = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_user=".$id_user);
            // nek angka 1 ne dihapus dadi bulat (5:2 = 2) , nek ga dihapus ono koma ne (5:2 = 2,5)
                $query3->execute();
                $fetchAverage = $query3->fetch();
                $averageRating = $fetchAverage['averageRating'];    
            ?>
        <tr>
            <td>Bintang yang diberikan user</td>
            <td>&nbsp; : &nbsp;</td>
            <td>
            <?php
            $star = '';
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= ceil($averageRating['rating_wisata'])) {
                    echo $star = '<i class="fa fa-star on"></i>';
                    // $star .= '<span class="on"><i class="fa fa-star"></i></span>';
                } else {
                    echo $star = '<i class="fa fa-star off"></i>';
                    // $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                }
            }
            ?>
        </td>
        </tr>
        <tr>
            <td>Rata - Rata Rating</td>
            <td>&nbsp; : &nbsp;</td>
            <td><?php echo $averageRating; ?></td>
        </tr>
        </table>
        </h4>