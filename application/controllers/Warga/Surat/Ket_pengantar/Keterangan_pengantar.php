<?php
class Keterangan_pengantar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login(); // Assuming this is a method to check if the user is logged in
        $this->load->model('M_getData');
        $this->load->model('M_surat');
    }

    public function index()
    {
        $data = array(
            'title' => 'Surat Keterangan Pengantar',
            'data' => $this->M_getData->getDataId() // Fetch data needed for the view
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('warga/surat/keterangan_pengantar/create');
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi.'));

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data tidak lengkap !');
            $this->index(); // Reload the form with error messages
        } else {
            $keperluan = $this->input->post('keperluan');
            $user_nama = $this->input->post('user_nama');
            $user_nik = $this->input->post('user_nik');
            $user_jekel = $this->input->post('user_jekel');
			$user_kewarganegaraan = $this->input->post('user_kewarganegaraan');
            $user_ttl = $this->input->post('user_ttl');
            $user_tempatlahir = $this->input->post('user_tempatlahir');
            $user_pekerjaan = $this->input->post('user_pekerjaan');
			$user_statuskawin = $this->input->post('user_statuskawin');
            $user_agama = $this->input->post('user_agama');
            $user_alamat = $this->input->post('user_alamat');
			$user_nomor_kk = $this->input->post('user_nomor_kk');
			$keterangan_lainnya = $this->input->post('keterangan_lainnya');
			$tujuan = $this->input->post('tujuan');
			
            // Remove user_rt and user_rw processing
            $date = date('Ymd-is');
            $d2 = trim($date);

            $noid = $this->M_getData->getSkpId();
            $lastId = intval($noid['id']); // Convert to integer
            $newId = $lastId + 1; // Increment
            $nomor = sprintf("%03d/SKP/%s/%s", $newId, date('m'), date('Y'));
			
            $data = array(
                'id_warga'  => $this->session->userdata('id_warga'),
                'jenis_surat'   => 'SURAT KETERANGAN PENGANTAR',
                'nomor_surat'   => $nomor,
                'tanggal_surat' => date('d/m/Y'),
                'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
                'user_nama'          => $user_nama,
                'user_nik'           => $user_nik,
                'user_jekel'         => $user_jekel,
                'user_tempatlahir'   => $user_tempatlahir,
                'user_ttl'           => $user_ttl,
                'user_agama'         => $user_agama,
                'user_pekerjaan'     => $user_pekerjaan,
                'user_alamat'        => $user_alamat,
				'user_kewarganegaraan'	=> $user_kewarganegaraan,
				'user_statuskawin' 	 => $user_statuskawin,
    			'user_nomor_kk'		=> $user_nomor_kk,
                'keperluan'          => $keperluan,
				'keterangan_lainnya' => $keterangan_lainnya,
				'tujuan' 			 => $tujuan,
                'status'             => 'Menunggu Verifikasi',
                'notifikasi'         => 0,
                'created_at'         => date('Y-m-d H:i:s')
            );

            $this->M_surat->skp($data);
            $this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat.');
            redirect('list-surat', 'refresh');
        }
    }
}
