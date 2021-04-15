<?php
error_reporting(0);
$wisata= $_REQUEST["wisata"];
switch ($wisata) {

    case 'det':
        require "det.php";
    break;

    case 'rating_ajax':
        require "rating_ajax.php";
    break;    

    case 'ws':
        require "ws.php";
    break;

	case 'komen':
	try{
		$id = $_GET['id'];
		$id_user = $_SESSION['sesion_id'];
		$komentar = $_POST['komentar'];

		$query = $kon->prepare("INSERT INTO komentar SET id_user = :id_user, id_wisata = :id, komentar = :komentar");

			$query->bindParam(':id_user', $id_user);
			$query->bindParam(':id', $id);
			$query->bindParam(':komentar', $komentar);
			$execute = $query->execute(); // Eksekusi query insert
		echo '<script language="javascript">window.alert("Berhasil Kirim Komentar");
			window.location="?kwb=wst&wisata=det&id='.$id.'";
			</script>';
	} catch (PDOException $e) {
		echo "Error! Gagal Berkomentar:".$e->getMessage();  
	}
	break;

	case 'rating':
	try{
		$id = $_GET['id'];
		$id_user = $_SESSION['sesion_id'];
		$rating_wisata = $_POST['rating_wisata'];

		$query = $kon->prepare("INSERT INTO rating SET id_user = :id_user, id_wisata = :id, rating_wisata = :rating_wisata");

			$query->bindParam(':id_user', $id_user);
			$query->bindParam(':id', $id);
			$query->bindParam(':rating_wisata', $rating_wisata);
			$execute = $query->execute();
		echo '<script language="javascript">window.alert("Berhasil Input Rating");
			window.location="?kwb=wst&wisata=det&id='.$id.'";
			</script>';
	} catch (PDOException $e) {
		echo "Error! Gagal Berkomentar:".$e->getMessage();  
	}
	break;
	
	case 'update':
	try{
		$id = $_GET['id'];
		$id_user = $_SESSION['sesion_id'];
		$rating_wisata = $_POST['rating_wisata'];

		$query = $kon->prepare("UPDATE rating SET rating_wisata = :rating_wisata WHERE id_user = :id_user AND id_wisata = :id");

			$query->bindParam(':id_user', $id_user);
			$query->bindParam(':id', $id);
			$query->bindParam(':rating_wisata', $rating_wisata);
			$execute = $query->execute();
		echo '<script language="javascript">window.alert("Berhasil Update Rating");
			window.location="?kwb=wst&wisata=det&id='.$id.'";
			</script>';
	} catch (PDOException $e) {
		echo "Error! Gagal Berkomentar:".$e->getMessage();  
	}
	break;
}
?>