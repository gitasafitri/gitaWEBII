<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


		public function index()
	{
		echo "ini controller mahasiswa";
		}
		public function profil(){

		echo "Nama  : gita cantek <br>";
		echo "Nim   : 1700310002 <br>";
		echo "Email : gitasafitry18@gmail.com.id <br>";	
		}
		public function dosen($param1 = '')
		{
           echo " Nama dosen ku ".$param;
		}
    public function get_semester(){
    	echo "Semester : 3";
    }

}
