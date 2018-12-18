<?php 
defined ('BASEPATH') OR exix ('No script access allowed');
 class Mahasiswa extends CI_Controller{

 	public function __construct()
 	{

 		parent::__construct();
 		$this->load->model('Mahasiswa_model');
 	}
 	public function index()
 	{

 		$data['judul']='Mahasiswa';
 		$data['sub_judul']='Halaman Mahasiswa';
 		$data['halaman']='admin/v_Mahasiswa';
 		$data['isi_tabel']=$this->Mahasiswa_model->all();

 		$this->load->view('admin/v_tamplate',$data);
 	}
 	public function tambah()
 	{

 		$data['judul']='Mahasiswa';
 		$data['sub_judul']='Halaman tambah';
 		$data['halaman']='admin/v_mahasiswa_tambah';
 		$data['isi_tabel']=$this->Mahasiswa_model->all();

 		$this->load->view('admin/v_tamplate',$data);
 	}


 }











 ?>