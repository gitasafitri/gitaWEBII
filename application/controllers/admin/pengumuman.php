<?php 
 
/**
* 
*/
class pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model');//kenalan
		// do your magic hare
	}
	
 
 public function index()
 	{
	$data ['judul'] = 'pengumuman';
    $data['sub_judul'] = 'halaman pengumuman';
    $data ['halaman'] = 'admin/v_pengumuman';// kenalan
    $data['isi_tabel']=$this->pengumuman_model->all();

	$this->load->view ('admin/v_tamplate',$data); 
	//$isi_tabel = $this->pengumuman_model->all();
	//print_r($isi_tabel);
 }
public function tambah()
{
 //echo "fungsi tambah";
	$data ['judul'] = 'Tambah pengumuman';
    $data['sub_judul'] = 'Tambah pengumuman';
    $data ['halaman'] = 'admin/v_tambah_pengumuman';// kenalan

    //$data['isi_tabel']=$this->pengumuman_model->all();

	$this->load->view ('admin/v_tamplate',$data); 
}

public function proses_tambah()
{
  	$judul =$this->input->post('judul');
	 $isi =$this->input->post('isi');
	 $penulis=$this->input->post('penulis');


	$objek = array(
	 'judul'=> $judul,
	 'isi'=>$isi,
	 'penulis'=>$penulis
		);

	if ($this->pengumuman_model->create($objek)){
	// echo "Berhasil";
	 	$this->session->set_flashdata('info','Data Berhasil Disimpan');
	    redirect('admin/pengumuman');
	}else{
	    $this->session->set_flashdata('info','Data Gagal Disimpan');
	    redirect('admin/pengumuman');
	    //echo "Gagal";
	    //var_dump($objek);

	}
}	
public function hapus($kode)
{
	if ($this->pengumuman_model->remove($kode)){

	 	$this->session->set_flashdata('info','Data Berhasil Dihapus');
	    redirect('admin/pengumuman');
	}else{
	    $this->session->set_flashdata('info','Data Gagal Dihapus');
	    redirect('admin/pengumuman');

	}
	 }
	public function edit($id)
	{
		//echo "Halaman edit";
			$data ['judul'] = 'edit pengumuman';
            $data['sub_judul'] = 'edit pengumuman';
            $data ['halaman'] = 'admin/v_edit_pengumuman';// kenalan

        $data['isi_data']=$this->pengumuman_model->get_id($id);

            //var_dump($data);
	        $this->load->view ('admin/v_tamplate',$data); 
	}

    public function proses_edit(){
    	$judul =$this->input->post('judul');
	    $isi =$this->input->post('isi');
	    $penulis=$this->input->post('penulis');
        
        $id = $this->input->post('id_pengumuman');

	$objek = array(
	 'judul'=> $judul,
	 'isi'=>$isi,
	 'penulis'=>$penulis
		);

	if ($this->pengumuman_model->update($id ,$objek)){
	 	$this->session->set_flashdata('info','Data Berhasil Diupdate');
	    redirect('admin/pengumuman');
	}else{
	    $this->session->set_flashdata('info','Data Gagal Diupdate');
	    redirect('admin/pengumuman');
	  
    }

}
}


 ?>