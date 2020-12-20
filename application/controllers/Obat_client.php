<?php

class Obat_client extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_obat_client');
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index()
  {
    $data['judul'] = 'Daftar Obat';
    $data['obat'] = $this->M_obat_client->getAllObat();
    $this->load->view('templates/header', $data);
    $this->load->view('obat/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Obat';

    $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required');
    $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required');
    $this->form_validation->set_rules('stok', 'Stok', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');


    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('obat/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->M_obat_client->tambahDataObat();
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('obat_client');
    }
  }

  public function hapus($id)
  {
    $this->M_obat_client->hapusDataObat($id);
    $this->session->set_flashdata('flash', 'Dihapus');
    redirect('obat_client');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data Obat';
    $data['obat'] = $this->M_obat_client->getObatById($id);
    $this->load->view('templates/header', $data);
    $this->load->view('obat/detail', $data);
    $this->load->view('templates/footer');
  }

  public function ubah($id)
  {
    $data['judul'] = 'Form Ubah Data Obat';
    $data['obat'] = $this->M_obat_client->getObatById($id);

    $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
    $this->form_validation->set_rules('jenis', 'Jenis', 'required');
    $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required');
    $this->form_validation->set_rules('stok', 'Stok', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('obat/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      $this->M_obat_client->ubahDataObat();
      $this->session->set_flashdata('flash', 'Diubah');
      redirect('obat_client');
    }
  }
}
