<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Example extends REST_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index_get()
  {
    $data = [
      "nama"   => "Sujud Satwikayana",
      "email"  => "satwikayana@gmail.com"
    ];

    if ($data) {
      $this->response($data, REST_Controller::HTTP_OK);
    } else {
      $this->response(['status' => false, 'message' => 'data tidak ditemukan'], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id');
    if ($id === null) {
      //statement jika id null
      $this->response([
        'status' => false,
        'message' => 'Tidak ada id yang dipilih'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if (condition) {
        //statement jika data berhasil dihapus
        $this->response([
          'status' => true,
          'message' => 'Data berhasil dihapus'
        ], REST_Controller::HTTP_OK);
      } else {
        //statement jika data gagal dihapus
        $this->response([
          'status' => false,
          'message' => 'Data gagal dihaps'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }

  public function index_post()
  {
    $data = [
      'nama' => $this->post('nama'),
      'email' => $this->post('email')
    ];
    
    if (condition) {
      //statement jika data berhasil ditambahkan
      $this->response(['status' => true, 'message' => 'Data telah ditambahkan'], REST_Controller::HTTP_OK);
    } else {
      //statement jika data gagal ditambahkan
      $this->response(['status' => false, 'message' => 'Gagal ditambahkan'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    }
  }

  public function index_put()
  {
    $data = [
      'nama' => $this->put('nama'),
      'email' => $this->put('email')
    ];
    
    if (condition) {
      //statement jika data berhasil diupdate
      $this->response(['status' => true, 'message' => 'Data telah diupdate'], REST_Controller::HTTP_OK);
    } else {
      //statement jika data gagal diupdate
      $this->response(['status' => false, 'message' => 'Data gagal diupdate'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    }
  }
}
