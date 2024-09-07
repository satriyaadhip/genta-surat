<?php
class Skd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login(); // Authentication check
        $this->load->model('M_getData');
        $this->load->model('M_surat');
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

        if ($this->form_validation->run() == TRUE) {
            $this->session->set_flashdata('error', 'Data tidak lengkap!');
            $this->index();
        } else {
            $user_nomor_kk = $this->input->post('user_nomor_kk');
            $user_nama_kk = $this->input->post('user_nama_kk');
            $user_alamat = $this->input->post('user_alamat');
            $user_nik = $this->input->post('user_nik');
            $user_nama = $this->input->post('user_nama');
            $user_telp = $this->input->post('user_telp');
            $user_alasanpindah = $this->input->post('user_alasanpindah');
            $user_alasanpindah_lainnya = $this->input->post('user_alasanpindah_lainnya');
            $user_tujuanpindah = $this->input->post('user_tujuanpindah');
            $user_jenispindah = $this->input->post('user_jenispindah');
            $user_status_kk_tidak_pindah = $this->input->post('user_status_kk_tidak_pindah');
            $user_status_kk_pindah = $this->input->post('user_status_kk_pindah');
            $memberkk_1_nama = $this->input->post('memberkk_1_nama');
            $memberkk_2_nama = $this->input->post('memberkk_2_nama');
            $memberkk_3_nama = $this->input->post('memberkk_3_nama');
            $memberkk_4_nama = $this->input->post('memberkk_4_nama');
            $memberkk_5_nama = $this->input->post('memberkk_5_nama');
            $memberkk_6_nama = $this->input->post('memberkk_6_nama');
            $memberkk_1_nik = $this->input->post('memberkk_1_nik');
            $memberkk_2_nik = $this->input->post('memberkk_2_nik');
            $memberkk_3_nik = $this->input->post('memberkk_3_nik');
            $memberkk_4_nik = $this->input->post('memberkk_4_nik');
            $memberkk_5_nik = $this->input->post('memberkk_5_nik');
            $memberkk_6_nik = $this->input->post('memberkk_6_nik');

            // Generate the surat number
            $noid = $this->M_getData->getSkdId();
            $nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/SKP/' . date('m') . '/' . date('Y');

            // Prepare data for database insertion
            $data = array(
                'id_warga' => $this->session->userdata('id_warga'),
                'jenis_surat' => 'SURAT KETERANGAN PINDAH',
                'nomor_surat' => $nomor,
                'tanggal_surat' => date('d/m/Y'),
                'tanggal_kadaluarsa' => date('d/m/Y', strtotime('+1 month')),

                'user_nomor_kk' => $user_nomor_kk,
                'user_nama_kk' => $user_nama_kk,
                'user_alamat' => $user_alamat,
                'user_nik' => $user_nik,
                'user_nama' => $user_nama,
                'user_telp' => $user_telp,
                'user_alasanpindah' => $user_alasanpindah,
                'user_alasanpindah_lainnya' => $user_alasanpindah_lainnya,
                'user_tujuanpindah' => $user_tujuanpindah,
                'user_jenispindah' => $user_jenispindah,
                'user_status_kk_tidak_pindah' => $user_status_kk_tidak_pindah,
                'user_status_kk_pindah' => $user_status_kk_pindah,
                'memberkk_1_nama' => $memberkk_1_nama,
                'memberkk_2_nama' => $memberkk_2_nama,
                'memberkk_3_nama' => $memberkk_3_nama,
                'memberkk_4_nama' => $memberkk_4_nama,
                'memberkk_5_nama' => $memberkk_5_nama,
                'memberkk_6_nama' => $memberkk_6_nama,
                'memberkk_1_nik' => $memberkk_1_nik,
                'memberkk_2_nik' => $memberkk_2_nik,
                'memberkk_3_nik' => $memberkk_3_nik,
                'memberkk_4_nik' => $memberkk_4_nik,
                'memberkk_5_nik' => $memberkk_5_nik,
                'memberkk_6_nik' => $memberkk_6_nik,
                'status' => 'Menunggu Verifikasi',
                'created_at' => date('Y-m-d H:i:s')
            );

            // Insert data into the database
            $this->M_surat->skd($data);
            $this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat.');
            redirect('list-surat', 'refresh');
        }
    }
}
