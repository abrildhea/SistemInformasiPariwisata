<?php
error_reporting(0);
$tp_wisata= $_REQUEST["tp_wisata"];
switch ($tp_wisata) {

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
            $tipe_wisata = $_POST['tipe_wisata']; //ambil value dari post index 'tipe_wisata'

            $query = $kon->prepare("insert into tipe_wisata (tipe_wisata) values (:tipe_wisata)");

            $dataTipe_wisata = array(
                ':tipe_wisata' => "$tipe_wisata" //ambil dari variabel $tipe_wisata
            );

            $query->execute($dataTipe_wisata); //Execute Query Builder (Prepare Function)

            echo "<script type=\"text/javascript\">alert('Berhasil Disimpan');document.location='?admin=twst&tp_wisata=v';</script>";
        } catch (PDOException $e) {
            echo "Error! gagal menyimpan data tipe wisata:".$e->getMessage();  
        }
        break;
   
    case 'edit':
        try{
            $id_tipe_wisata = $_POST['id_tipe_wisata'];
            $tipe_wisata = $_POST['tipe_wisata'];
            $query = $kon->prepare("update tipe_wisata set tipe_wisata = :tipe_wisata where id_tipe_wisata = :id_tipe_wisata");

            $data = array(
                ':tipe_wisata' => "$tipe_wisata",
                ':id_tipe_wisata' => "$id_tipe_wisata"
            );

            $query->execute($data);

            echo "<script type=\"text/javascript\">alert('Berhasil Di Edit');document.location='?admin=twst&tp_wisata=v';</script>";
        } catch (PDOException $e){
            echo "Error! gagal mengedit data tipe wisata:".$e->getMessage();
        }
        break;

    case 'hapus':
            $id_tw = $_GET['id'];
            try {
                $sql = "DELETE FROM tipe_wisata WHERE id_tipe_wisata = '$id_tw'";
             
                // use exec() because no results are returned
                $kon->exec($sql);

                echo "<script type=\"text/javascript\">alert('Berhasil Dihapus');document.location='?admin=twst&tp_wisata=v';</script>";
            } catch (PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        break;
}
?>