<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;

	public function __construct(){
		parent:: __construct();
		$this->load->model(array('upload_m','auth_m'));
	}

	public function index($page = NULL, $offset = '', $key = NULL)
	{
		if($this->auth_m->check_logged()=== FALSE){
			redirect(base_url().'login/');
		}else{
			$this->data['title'] = 'Upload with CodeIgniter';
			$this->data['query'] = $this->upload_m->get_all_image();
			$data['body'] = $this->load->view('upload_v', $this->data);
			//tampilan awal saat controller upload diakses
			
		}
	}

	public function add(){
		$this->data['title'] = 'Form Upload with CodeIgniter';
		$data['body'] = $this->load->view('form_upload', $this->data);
		
	}

	function download($file)
	{
		$name =$file;
		$data = file_get_contents('./assets/images/uploads/'.$file);
		force_download($name, $data);
		redirect('index', 'refresh');
	}

	public function insert(){
		$namafile = "file_".time();//nama file direname dan diikuti fungsi time
		$config['upload_path'] = './assets/images/uploads/';//path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';//type yang dapat diakses
		//'allowed_types' => "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp",
		$config['max_size'] = '2048';//besar file maksimum
		$config['max_width'] = '1288';//lebar file maksimum
		$config['max_height'] = '768';//tinggi file maksimum
		$config['file_name'] = $namafile;//nama file yang terupload

		$this->upload->initialize($config);

		//constains the original name of uploaded file from the user's computer.
		if($_FILES['filefoto']['name']) {
			if($this->upload->do_upload('filefoto')) {
				$gambar = $this->upload->data();
				$data = array('nama_gambar' => $gambar['file_name'],'tipe_gambar' => $gambar['file_type'],'ket_gambar' => $this->input->post('textket'));
				$this->upload_m->get_insert($data); //akses model untuk menyimpan ke database
				//pesan yang muncul jika berhasil diupload pada session flashdata
				//CodeIgniter supports "flashdata", or session data that will only be available for next server request, and are than automatically cleared. These can be very useful,and are typically used for informational or status messages (for example: "record 2 deleted").
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-
					success\" id=\"alert\"> Upload Berhasil!</div>");
				redirect('upload'); //jika berhasil maka akan ditampilkan view upload_v
			}else{
				//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-
					danger\" id=\"alert\"> Upload Gagal!</div>");
				redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
			}
		}
	}
}