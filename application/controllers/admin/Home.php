<?php 
class Home extends CI_Controller
{

public  function index(){
//echo "admin/home"
	$data ['judul'] = 'dashboard';
    $data['sub_judul'] = 'halaman utama';
    $data ['halaman'] = 'admin/v_index.php';

	$this->load->view ('admin/v_tamplate',$data);

}
public function coba()
{
    $data ['judul'] = 'coba';
    $data['sub_judul'] = 'halaman coba';
    $data ['halaman'] = 'admin/v_coba';

	$this->load->view ('admin/v_tamplate',$data);
}
   public function pengumuman(){
   	$data ['judul'] = 'pengumuman';
    $data['sub_judul'] = 'halaman pengumuman';
    $data ['halaman'] = 'admin/v_pengumuman';

	$this->load->view ('admin/v_tamplate',$data);

   }

}

 ?>

