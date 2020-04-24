<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "uts");

//ambil data dari tabel pasien
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	//ambil data dari tiap elemen dalam form
	$positif    = htmlspecialchars($data["Positif"]);
	$dirawat   = htmlspecialchars($data["Dirawat"]);
	$sembuh = htmlspecialchars($data["Sembuh"]);
	$meninggal = htmlspecialchars($data["Meninggal"]);
	$wil	= htmlspecialchars($data["wil"]);
	$operator	= htmlspecialchars($data["operator"]);
	$nim	= htmlspecialchars($data["nim"]);
    //query insert data
    $query = "INSERT INTO  VALUES
    ('', '$positif', '$dirawat', '$sembuh', '$meninggal', '$wil', '$operator', '$nim')";

	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

?>
