<?php 

class Mahasiswa extends Controller {
	public function index(){
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header');
		$this->view('mahasiswa/index');
		$this->view('templates/footer');
	}

	public function detail($id){
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header');
		$this->view('mahasiswa/index');
		$this->view('templates/footer');
	}

	public function tambah(){
		if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/mahasiswa');
			exit;
		}
	}
}