<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');


        if (!$this->session->userdata('email')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        //memanggil nama profil yang sedang aktif
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Data Pribadi Pelamar';

        $this->load->view('templates/index_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/index_footer');
    }

    public function biodata()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();

        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $data['title'] = 'Biodata';

            $this->load->view('templates/index_header', $data);
            $this->load->view('biodata/index',);
            $this->load->view('templates/index_footer', $data);
        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

            $data = [
                'posisi' => htmlspecialchars($this->input->post('posisi', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'no_ktp' => $this->input->post('no_ktp'),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'golongan_darah' => htmlspecialchars($this->input->post('golongan_darah', true)),
                'status' => htmlspecialchars($this->input->post('status', true)),
                'alamat_ktp' => htmlspecialchars($this->input->post('alamat_ktp', true)),
                'alamat_tinggal' => htmlspecialchars($this->input->post('alamat_tinggal', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                'orang_terdekat' => htmlspecialchars($this->input->post('orang_terdekat', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'skill' => htmlspecialchars($this->input->post('skill', true)),
                'bersedia' => htmlspecialchars($this->input->post('bersedia', true)),
                'penghasilan' => htmlspecialchars($this->input->post('penghasilan', true)),
                'user_id' => $this->session->userdata('id'),
            ];

            if ($this->input->post('metod', true) == 'post') {
                $this->db->insert('biodata', $data);
            } else {
                $this->db->update('biodata', $data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login</div>');

            redirect('user', 'refresh');
        }
    }

    public function pendidikan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();
        $data['pendidikan'] = $this->db->get_where('pendidikan', ['id_biodata' => @$data['biodata']['id']])->row_array();

        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $data['title'] = 'Pendidikan Terakhir';

            $this->load->view('templates/index_header', $data);
            $this->load->view('pendidikan/index', $data);
            $this->load->view('templates/index_footer', $data);
        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

            $data = [
                'id_biodata' => $data['biodata']['id'],
                'jenjang_pendidikan' => htmlspecialchars($this->input->post('jenjang_pendidikan', true)),
                'nama_institusi' => $this->input->post('nama_institusi'),
                'jurusan' => htmlspecialchars($this->input->post('jurusan', true)),
                'tahun_lulus' => htmlspecialchars($this->input->post('tahun_lulus', true)),
            ];

            if ($this->input->post('metod', true) == 'post') {
                $this->db->insert('pendidikan', $data);
            } else {
                $this->db->update('pendidikan', $data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login</div>');

            redirect('user', 'refresh');
        }
    }



    public function pelatihan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();
        $data['pelatihan'] = $this->db->get_where('riwayat_pelatihan', ['id_biodata' => @$data['biodata']['id']])->row_array();

        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $data['title'] = 'Riwayat Pelatihan';

            $this->load->view('templates/index_header', $data);
            $this->load->view('pelatihan/index', $data);
            $this->load->view('templates/index_footer', $data);
        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

            $data = [
                'id_biodata' => $data['biodata']['id'],
                'nama_kursus' => htmlspecialchars($this->input->post('nama_kursus', true)),
                'sertifikat' => htmlspecialchars($this->input->post('sertifikat', true)),
                'tahun' => $this->input->post('tahun'),
            ];

            if ($this->input->post('metod', true) == 'post') {
                $this->db->insert('riwayat_pelatihan', $data);
            } else {
                $this->db->update('riwayat_pelatihan', $data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login</div>');

            redirect('user', 'refresh');
        }
    }

    public function pekerjaan()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();
        $data['pekerjaan'] = $this->db->get_where('riwayat_pekerjaan', ['id_biodata' => @$data['biodata']['id']])->row_array();

        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $data['title'] = 'Riwayat Pekerjaan';

            $this->load->view('templates/index_header', $data);
            $this->load->view('pekerjaan/index', $data);
            $this->load->view('templates/index_footer', $data);
        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {

            $data = [
                'id_biodata' => $data['biodata']['id'],
                'nama_perusahaan' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
                'posisi_terakhir' => htmlspecialchars($this->input->post('posisi_terakhir', true)),
                'pendapatan_terakhir' => htmlspecialchars($this->input->post('pendapatan_terakhir', true)),
                'tahun' => $this->input->post('tahun'),
            ];

            if ($this->input->post('metod', true) == 'post') {
                $this->db->insert('riwayat_pekerjaan', $data);
            } else {
                $this->db->update('riwayat_pekerjaan', $data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login</div>');

            redirect('user', 'refresh');
        }
    }
}
