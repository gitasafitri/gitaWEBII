<?php 
 class dosen extends CI_Controller{

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('dosen_model');//kenalan
 	}
 	public function index()
 	{

 		$data['judul']='Dosen';
 		$data['sub_judul']='Halaman dosen';
 		$data['halaman']='admin/v_dosen';
 		$data['isi_tabel']=$this->dosen_model->all();

 		$this->load->view('admin/v_tamplate',$data);
 	}
 	public function tambah()
 	{

 		$data['judul']='Dosen';
 		$data['sub_judul']='Halaman tambah data dosen';
 		$data['halaman']='admin/v_tambah_dosen';
 		$data['isi_tabel']=$this->dosen_model->all();

 		$this->load->view('admin/v_tamplate',$data);
 	}
 	public function proses_tambah()
{
  	$nik =$this->input->post('nik');
	 $nama_dosen=$this->input->post('nama_dosen');
	 $alamat=$this->input->post('alamat');


	$objek = array(
	 'nik'=> $nik,
	 'nama_dosen'=>$nama_dosen,
	 'alamat'=>$alamat
		);

	if ($this->dosen_model->create($objek)){
	// echo "Berhasil";
	 	$this->session->set_flashdata('info','Data Berhasil Disimpan');
	    redirect('admin/dosen');
	}else{
	    $this->session->set_flashdata('info','Data Gagal Disimpan');
	    redirect('admin/dosen');
	    //echo "Gagal";
	    //var_dump($objek);

	}
 }
}

