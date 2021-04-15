<?php
error_reporting(0);
$kec= $_REQUEST["kec"];
switch ($kec) {

    case 'i':
        require "i.php";
    break;

    case 'v':
        require "v.php";
    break;

    case 'e':
        require "e.php";
    break;

    case 'add':
        try {
            // $id = rand(1, 1000); //random number
            $kecamatan = $_POST['kecamatan']; //ambil value dari post index 'kecamatan'

            $query = $kon->prepare("insert into kecamatan (kecamatan) values (:kecamatan)");

            $dataKecamatan = array(
                // ':id' => "$id", //ambil dari variabel $id
                ':kecamatan' => "$kecamatan" //ambil dari variabel $kecamatan
            );

            $query->execute($dataKecamatan); //Execute Query Builder (Prepare Function)

            echo "<script type=\"text/javascript\">alert('Berhasil Disimpan');document.location='?admin=kcm&kec=v';</script>";
        } catch (PDOException $e) {
            echo "Error! gagal menyimpan data kecamatan:".$e->getMessage();  
        }
        break;
   
    case 'edit':
        // edit data
        try{
            $id_kecamatan = $_POST['id_kecamatan'];
            $kecamatan = $_POST['kecamatan'];
            $query = $kon->prepare("update kecamatan set kecamatan = :kecamatan where id_kecamatan = :id_kecamatan");

            $data = array(
                ':kecamatan' => "$kecamatan",
                ':id_kecamatan' => "$id_kecamatan"
            );

            $query->execute($data);

            echo "<script type=\"text/javascript\">alert('Berhasil Di Edit');document.location='?admin=kcm&kec=v';</script>";
        } catch (PDOException $e){
            echo "Error! gagal mengedit data kecamatan:".$e->getMessage();
        }
        break;

    case 'hapus':
            $id_kec = $_GET['id'];
            try {
                $sql = "DELETE FROM kecamatan WHERE id_kecamatan = '$id_kec'";
             
                // use exec() because no results are returned
                $kon->exec($sql);

                echo "<script type=\"text/javascript\">alert('Berhasil Dihapus');document.location='?admin=kcm&kec=v';</script>";
            } catch (PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        break;
}
?>