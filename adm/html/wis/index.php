<?php
error_reporting(0);
$wis= $_REQUEST["wis"];
switch ($wis) {

    case 'i':
        require "i.php";
    break;

    case 'v':
        require "v.php";
    break;

    case 'e':
        require "e.php";
    break;
	
	case 'det':
        require "det.php";
    break;

    case 'rate':
        require "rate.php";
    break;
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
        $tgl = date("Y-m-d");
        date_default_timezone_set('Asia/Jakarta');

        $image_wisata = $_FILES['image_wisata']['name'];
        $tmp = $_FILES['image_wisata']['tmp_name'];

        // Rename nama image_wisatanya dengan menambahkan tanggal dan jam upload
        //$image_wisatabaru = date('dmYHis').$image_wisata;

        // Set path folder tempat menyimpan image_wisatanya
        $path = "../../data_wisata/foto_wisata/".$image_wisata;

        // Proses upload
        if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak  
        // Proses simpan ke Database
        $query = $kon->prepare("INSERT INTO wisata (id_admin, id_kecamatan, id_tipe_wisata, nama_wisata, alamat, kuliner_khas, deskripsi_wisata, latitude, longitude, image_wisata, tgl)
                VALUES (:id_admin, :id_kecamatan, :id_tipe_wisata, :nama_wisata, :alamat, :kuliner_khas, :deskripsi_wisata, :latitude, :longitude, :image_wisata, :tgl)");

        $dataWisata = array(
            ':id_admin' => "$id_admin", //ambil dari variabel $tipe_wisata
            ':id_kecamatan' => "$id_kecamatan",
            ':id_tipe_wisata' => "$id_tipe_wisata",
            ':nama_wisata' => "$nama_wisata",
            ':alamat' => "$alamat",
            ':kuliner_khas' => "$kuliner_khas",
            ':deskripsi_wisata' => "$deskripsi_wisata",
            ':latitude' => "$latitude",
            ':longitude' => "$longitude",
            ':image_wisata' => "$image_wisata",
            ':tgl' => "$tgl"
        );

        $query->execute($dataWisata); 

        if($query){
            echo "<script type=\"text/javascript\">alert('Berhasil Disimpan');document.location='?admin=ws&wis=v';</script>";
        }else{
            echo "<script type=\"text/javascript\">alert('Gagal Disimpan');document.location='?admin=ws&wis=v';</script>";
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
    $tgl = date("Y-m-d");
    date_default_timezone_set('Asia/Jakarta');

    $image_wisata = $_FILES['image_wisata']['name'];
    $tmp = $_FILES['image_wisata']['tmp_name'];

    // Cek apakah user ingin mengubah fotonya atau tidak
    if(empty($image_wisata)){ // Jika user tidak memilih file foto pada form
        // Lakukan proses update tanpa mengubah fotonya
        // Proses ubah data ke Database
        $sql = $kon->prepare("UPDATE wisata SET nama_wisata = :nama_wisata, alamat = :alamat, kuliner_khas = :kuliner_khas, deskripsi_wisata = :deskripsi_wisata, latitude = :latitude, longitude = :longitude, tgl = :tgl WHERE id_wisata = :id");
            // $sql->bindParam(':id_admin', $id_admin);
            // $sql->bindParam(':id_kecamatan', $id_kecamatan);
            // $sql->bindParam(':id_tipe_wisata', $id_tipe_wisata);
            $sql->bindParam(':nama_wisata', $nama_wisata);
            $sql->bindParam(':alamat', $alamat);
            $sql->bindParam(':kuliner_khas', $kuliner_khas);
            $sql->bindParam(':deskripsi_wisata', $deskripsi_wisata);
            $sql->bindParam(':latitude', $latitude);
            $sql->bindParam(':longitude', $longitude);
            $sql->bindParam(':tgl', $tgl);
            $sql->bindParam(':id', $id);
            $execute = $sql->execute(); // Eksekusi query insert

            if ($sql) {
                echo "<script type=\"text/javascript\">alert('Berhasil Edit Tanpa Gambar');document.location='?admin=ws&wis=v';</script>";
            }else{
                echo "<script type=\"text/javascript\">alert('Gagal Edit Tanpa Gambar');document.location='?admin=ws&wis=v';</script>";
            }
        }else{ // Jika user memilih foto / mengisi input file foto pada form
            // Rename nama image_wisatanya dengan menambahkan tanggal dan jam upload
            //$image_wisatabaru = date('dmYHis').$image_wisata;

            // Set path folder tempat menyimpan image_wisatanya
            $path = "../../data_wisata/foto_wisata/".$image_wisata;

            // proses upload
            if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
                // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
                $sql = $kon->prepare("SELECT image_wisata FROM wisata WHERE id_wisata = :id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql

                // Cek apakah file foto sebelumnya ada di folder images
                if (is_file("../../data_wisata/foto_wisata/".$data['image_wisata'])) { // Jika foto ada
                    unlink("../../data_wisata/foto_wisata/".$data['image_wisata']); // Hapus file foto sebelumnya yang ada di folder images

                    // Proses ubah data ke Database
                    $sql = $kon->prepare("UPDATE wisata SET nama_wisata = :nama_wisata, alamat = :alamat, kuliner_khas = :kuliner_khas, deskripsi_wisata = :deskripsi_wisata, latitude = :latitude, longitude = :longitude, tgl = :tgl, image_wisata = :image_wisata WHERE id_wisata = :id");
                    // $sql->bindParam(':id_admin', $id_admin);
                    // $sql->bindParam(':id_kecamatan', $id_kecamatan);
                    // $sql->bindParam(':id_tipe_wisata', $id_tipe_wisata);
                    $sql->bindParam(':nama_wisata', $nama_wisata);
                    $sql->bindParam(':alamat', $alamat);
                    $sql->bindParam(':kuliner_khas', $kuliner_khas);
                    $sql->bindParam(':deskripsi_wisata', $deskripsi_wisata);
                    $sql->bindParam(':latitude', $latitude);
                    $sql->bindParam(':longitude', $longitude);
                    $sql->bindParam(':tgl', $tgl);
                    $sql->bindParam(':image_wisata', $image_wisata);
                    $sql->bindParam(':id', $id);
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

    case 'hapus':
            // Ambil data NIS yang dikirim oleh index.php melalui URL
            $id = $_GET['id'];
            // Query untuk menampilkan data wisata berdasarkan ID yang dikirim
            $sql = $kon->prepare("SELECT image_wisata FROM wisata WHERE id_wisata=:id");
            $sql->bindParam(':id', $id);
            $sql->execute(); // Eksekusi query insert
            $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql

            // Cek apakah file image_wisatanya ada di folder images
            if(is_file("../../data_wisata/foto_wisata/".$data['image_wisata'])) // Jika image_wisata ada
              unlink("../../data_wisata/foto_wisata/".$data['image_wisata']); // Hapus image_wisata yang telah diupload dari folder images

            // Query untuk menghapus data wisata berdasarkan ID yang dikirim
            $sql = $kon->prepare("DELETE FROM wisata WHERE id_wisata=:id");
            $sql->bindParam(':id', $id);
            $execute = $sql->execute(); // Eksekusi / Jalankan query

            if($execute){ // Cek jika proses simpan ke database sukses atau tidak  
                // Jika Sukses, Lakukan : 
                echo "<script type=\"text/javascript\">alert('Berhasil Dihapus');document.location='?admin=ws&wis=v';</script>";
                }else{  // Jika Gagal, Lakukan :  
                    echo "<script type=\"text/javascript\">alert('Gagal Dihapus');document.location='?admin=ws&wis=v';</script>";
                }
        break;
}
?>