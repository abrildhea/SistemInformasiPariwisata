<?php

include "../../adm/php/js/koneksi.php";

$userid = 4;
$postid = $_POST['postid'];
$rating = $_POST['rating'];

// Check entry within table
$query = $kon->prepare("SELECT COUNT(*) AS cntpost FROM post_rating WHERE postid=".$postid." and userid=".$userid);

$query->execute();
$fetchdata = $query->fetch();
$count = $fetchdata['cntpost'];

if($count == 0){
    $insertquery = $kon->prepare("INSERT INTO post_rating(userid,postid,rating) values(:userid,:postid,:rating)");
    $dataInsert = array(
    	':userid' => "$userid",
    	':postid' => "$postid",
    	':rating' => "$rating"
    );
    $insertquery->execute($dataInsert);
}else {
    $updatequery = $kon->prepare("UPDATE post_rating SET rating=:rating WHERE userid=:userid and postid=:postid");
    $updatequery->bindParam(':rating', $rating);
    $updatequery->bindParam(':userid', $userid);
    $updatequery->bindParam(':postid', $postid);
    $execute = $updatequery->execute();
}


// get average
$query2 = $kon->prepare("SELECT ROUND(AVG(rating),1) as averageRating FROM post_rating WHERE postid=".$postid);
$query2->execute();
$fetchAverage = $query2->fetch();
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);