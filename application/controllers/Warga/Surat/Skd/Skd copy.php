<?php
class Skd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('M_getData');
		$this->load->Model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'GENTA | Surat Keterangan Pindah',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skd/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi!'));

		$cek = $this->M_surat->cek_skd();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Data tidak lengkap!');
			$this->index();
		} else {

			// if ($cek) {
			// 	$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKD</span> karena masih ada yang belum terverifikasi!');
			// 	redirect('list-surat', 'refresh');
			// } else {

				$keperluan = $this->input->post('keperluan');
				$user_nama = $this->input->post('user_nama');
				$user_nik = $this->input->post('user_nik');
				$user_jekel = $this->input->post('user_jekel');
				$user_tempatlahir = $this->input->post('user_tempatlahir');
				$user_ttl = $this->input->post('user_ttl');
				$user_agama = $this->input->post('user_agama');
				$user_pekerjaan = $this->input->post('user_pekerjaan');
				$user_alamat = $this->input->post('user_alamat');
				$user_rt = $this->input->post('user_rt');
				$user_rw = $this->input->post('user_rw');
				// $file_kk = $_FILES['file_kk']['name'];
				// $file_ktp = $_FILES['file_ktp']['name'];

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				// $extensi1 = explode('.', $file_kk);
				// $extensi = strtolower(end($extensi1));
				// $acak_angka =  rand(1, 999);
				// $filekk = str_replace('', '', 'skd-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);
				// $date = date('Ymd-is');
				// $d2 = trim($date);
				//acak nama gambar
				// $extensi1 = explode('.', $file_ktp);
				// $extensi = strtolower(end($extensi1));
				// $acak_angka =  rand(1, 999);
				// $filektp = str_replace('', '', 'skd-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);



				// if ($file_kk == '' || $file_ktp == '') {
				// 	$this->session->set_flashdata('error', 'File tidak lengkap!');
				// 	redirect('skd/create', 'refresh');
				// } else {
					$noid = $this->M_getData->getSkdId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKD' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT KETERANGAN PINDAH',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'keperluan'     => $keperluan,
						// 'file_kk'       => $filekk,
						// 'file_ktp'      => $filektp,
						'user_nama'          =>  $user_nama,
						'user_nik'          =>  $user_nik,
						'user_jekel'          =>  $user_jekel,
						'user_tempatlahir'          =>  $user_tempatlahir,
						'user_ttl'          =>  $user_ttl,
						'user_agama'          =>  $user_agama,
						'user_pekerjaan'          =>  $user_pekerjaan,
						'user_alamat'          =>  $user_alamat,	
						'user_rt'          =>  $user_rt,	
						'user_rw'          =>  $user_rw,	
						'status'        => 'Menunggu Verifikasi',
						'created_at'    => date('Y-m-d H:i:s')
					);

					// $config['upload_path'] = './assets/file_kk/'; //folder penyimpanana gambar
					// $config['file_name'] = $filekk;
					// $config['allowed_types'] = 'jpg|jpeg|png|PNG';
					// $config['max_size'] = '3024';
					// $config['remove_space'] = TRUE;
					// $this->load->library('upload', $config);
					// $this->upload->initialize($config);
					// if (!$this->upload->do_upload('file_kk')) {
					// 	$this->session->set_flashdata('danger', $this->upload->display_errors());

					// 	redirect('skd/buat-surat', 'refresh');
					// } else {
					// 	$this->upload->data();
					// }

					// $config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
					// $config['file_name'] = $filektp;
					// $config['allowed_types'] = 'jpg|jpeg|png|PNG';
					// $config['max_size'] = '3024';
					// $config['remove_space'] = TRUE;
					// $this->load->library('upload', $config);
					// $this->upload->initialize($config);
					// if (!$this->upload->do_upload('file_ktp')) {
					// 	$this->session->set_flashdata('danger', $this->upload->display_errors());

					// 	redirect('skd/buat-surat', 'refresh');
					// } else {
					// 	$this->upload->data();
					// }
					$this->M_surat->skd($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat.');
					redirect('list-surat', 'refresh');
				}
			}
		// }
	}

