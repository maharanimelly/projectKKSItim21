<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Tanggal extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}

	public function index()
	{
		$tgl_mysql = "2015-12-01";//format tanggal mysql
		$tgl_timestamp = time();//timestamp

		echo tgl_indo($tgl_mysql);
		echo"</br>";
		echo tgl_indo_timestamp($tgl_timestamp);
	}
}