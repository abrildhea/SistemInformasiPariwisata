<?php

	require_once '../connection/conn.php';

	$viewWisataAlam = $conn -> prepare("SELECT
	wisata.id_wisata,
	wisata.id_tipe_wisata,
	wisata.nama_wisata,
	tipe_wisata.tipe_wisata,
	wisata.alamat,
	kecamatan.kecamatan,
	wisata.kuliner_khas,
	wisata.latitude,
	wisata.longitude,
	wisata.deskripsi_wisata,
	wisata.image_wisata
FROM
	tipe_wisata
	INNER JOIN wisata ON tipe_wisata.id_tipe_wisata = wisata.id_tipe_wisata
	INNER JOIN kecamatan ON wisata.id_kecamatan = kecamatan.id_kecamatan 
WHERE
	tipe_wisata.id_tipe_wisata = '1' 
ORDER BY
	wisata.id_wisata ASC");

	$viewWisataAlam -> execute();

	$result = $viewWisataAlam -> fetchAll(PDO::FETCH_ASSOC);
	if (is_null($viewWisataAlam)) {
		$status = false;
	} else {
		$status = true;
	}

	header('Content-Type: application/json');
	$response = ['status' => $status, 'wisata_alam' => $result];
	echo json_encode($response);


?>