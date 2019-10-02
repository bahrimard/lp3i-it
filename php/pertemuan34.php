<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('m');
$tanggal -= 1;
// d adalah tanggal 01 ... 3n
// D adalah nama hari Mon ... Sun
// m adalah bulan 01 ... 12
// M adalah bulan Jan ... Dec
// y adalah tahun 19 ... 25
// Y adalah tahun 2019 ... 2025
// echo $tanggal;
$bulan = 8;

// Cara 1
$bulan = array(
			'Januari', 
			'Februari', 
			'Desember',
		);

// Cara 2
$bulan = [
			'Januari', 
			'Februari', 
			'Desember',
		];

// Cara 3
$bulan = array();
$bulan[] = 'Januari';
$bulan[] = 'Februari';
$bulan[] = 'Maret';
$bulan[] = 'April';
$bulan[] = 'Mei';
$bulan[] = 'Juni';
$bulan[] = 'Juli';
$bulan[] = 'Agustus';
$bulan[] = 'September';
$bulan[] = 'Oktober';
$bulan[] = 'Nopember';
$bulan[] = 'Desember';

echo $bulan[$tanggal];

// echo $bulan[1];
// if (isset($bulan[3]))
	// echo $bulan[3];
// if (isset($bulan['jan']))
	// echo $bulan['jan'];
?>
<!Doctype html><html><head><title>Pertemuan 3-4</title></head><body></body></html>