<!DOCTYPE html>
<html>
<head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="bb2.jpg">
	<br>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Buku extends CI_Controller
{
	var $data = array();
	function __construct()
{
parent :: __construct();
$this->load->model(array('Buku_m','auth_m'));
}
function index()
{
if($this->auth_m->check_logged()=== FALSE){
	redirect(base_url().'login/');
}else{	
$this->data['query']=$this->Buku_m->get_records();
$this->load->view('buku_v', $this->data);

	}
}
function save()
{
	$data['id_buku']=$this->input->post('id_buku', true);
	$data['judul']=$this->input->post('judul', true);
	$data['pengarang']=$this->input->post('pengarang', true);
	$data['penerbit']=$this->input->post('penerbit', true);
	$data['tahun']=$this->input->post('tahun', true);

	if($is_update == 0)
	{
		if ($this->Buku_m->insert($data))
			redirect('buku');
	}
	else
	{
		$id =$this->input->post('id_buku');
		if ($this->Buku_m->update_by_id($data, $id))
			redirect('buku');
	}
}
function edit($id)
{
	$this->data['query'] =$this->Buku_m->get_records("id_buku = '$id'");
	$this->data['is_update'] = 1;
	$this->load->view('form_buku', $this->data);

}
function delete($id)
{
	if($this->Buku_m->delete_by_id($id))
		redirect('buku');
}
function add_new()
{
$this->data['is_update'] = 0;
$this->load->view('form_buku',$this->data);

	}
}