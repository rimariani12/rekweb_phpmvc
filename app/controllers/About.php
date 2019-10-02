<?php 

class About{
	public function index($nama = 'RimaRN', $pekerjaan = 'Pelajar'){
		echo "halo nama saya $nama, saya adalah seorang $pekerjaan";
	}
	public function page(){
		echo 'About/page';
	}
}