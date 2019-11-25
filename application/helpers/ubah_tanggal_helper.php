<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//untuk mengetahui bulan bulan
function bulan($bln)
{
	switch ($bln)
	{
		case 1:
			return "Januari";
			break;
		case 2:
			return "Februari";
			break;
		case 3:
			return "Maret";
			break;
		case 4:
			return "April";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Juni";
			break;
		case 7:
			return "Juli";
			break;
		case 8:
			return "Agustus";
			break;
		case 9:
			return "September";
			break;
		case 10:
			return "Oktober";
			break;
		case 11:
			return "November";
			break;
		case 12:
			return "Desember";
			break;
	}
}

//format taggal yyy-mm-dd
function tgl_indo ($tgl)
{
	//untuk mengatasi masalah perbedaan waktu server, dapat menggunakan fungsi gmdate() yang bertujuan untuk mendapatkan informasi waktu GMT/waktu standar
	$ubah = gmdate($tgl, time()+60*60*7); //60*60*7 maksudnya adalah 7 jam. ditambah 7 jam karena WIB adalah +7 dari waktu GMT
	//fungsi explode yaitu untuk memecah string berdasar kriteria tertentu
	$pecah = explode("-", $ubah); //memecah variabel berdasarkan -

	$tanggal = $pecah[2];
	$bulan = bulan($pecah[1]);
	$tahun = $pecah[0];

	$ubahTanggal = "$tanggal $bulan $tahun"; //hasil akhir tanggal
	return $ubahTanggal;
}

//format tanggal timestamp
function tgl_indo_timestamp($tgl)
{
	$ubah = date('Y-m-d H:i:s', $tgl);//mengubah format menjadi tanggal biasa
	$pecah_tgl_utuh = explode(" ", $ubah);//memecah berdasarkan spasi
	$tgl_bln_thn = $pecah_tgl_utuh[0];//mendapatka variabel format yyyy-mm-dd
	$waktu = $pecah_tgl_utuh[1];//mendapatkan format hh:ii:ss
	$pecah_tgl_bln_thn = explode("-", $tgl_bln_thn);//lalu memecah variabel berdasarkan -

	$tanggal = $pecah_tgl_bln_thn[2];
	$bulan = $pecah_tgl_bln_thn[1];
	$tahun = $pecah_tgl_bln_thn[0];

	$bulan = bulan($bulan);
	$ubahTanggal = " $tanggal $bulan $tahun | $waktu ";//hasil akhir tanggal
	return $ubahTanggal;
}