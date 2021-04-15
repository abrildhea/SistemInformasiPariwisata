<?php

$id_user = $_SESSION['sesion_id'];
$id_wisata = $_POST['id_wisata'];
$rating_wisata = $_POST['rating_wisata'];

// Check entry within table
$query = $kon->prepare("SELECT COUNT(*) AS jumlah_rating FROM rating WHERE id_wisata=".$id_wisata." and id_user=".$id_user);

$query->execute();
$fetchdata = $query->fetch();
$count = $fetchdata['jumlah_rating'];

if($count == 0){
    $insertquery = $kon->prepare("INSERT INTO rating(id_user,id_wisata,rating_wisata) values(:id_user,:id_wisata,:rating_wisata)");
    $dataInsert = array(
    	':id_user' => "$id_user",
    	':id_wisata' => "$id_wisata",
    	':rating_wisata' => "$rating_wisata"
    );
    $insertquery->execute($dataInsert);
}else {
    $updatequery = $kon->prepare("UPDATE rating SET rating_wisata=:rating_wisata WHERE id_user=:id_user and id_wisata=:id_wisata");
    $updatequery->bindParam(':rating_wisata', $rating_wisata);
    $updatequery->bindParam(':id_user', $id_user);
    $updatequery->bindParam(':id_wisata', $id_wisata);
    $execute = $updatequery->execute();
}

// get average
$query2 = $kon->prepare("SELECT ROUND(AVG(rating_wisata),1) as averageRating FROM rating WHERE id_wisata=".$id_wisata);
$query2->execute();
$fetchAverage = $query2->fetch();
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);