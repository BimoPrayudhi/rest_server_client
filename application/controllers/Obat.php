<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Obat extends REST_Controller

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_obat');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $p = $this->get('page');
            $p = (empty($p) ? 1 : $p);
            $total_data = $this->M_obat->count();
            $total_page = ceil($total_data / 15);
            $start = ($p - 1) * 2;
            $list = $this->M_obat->get(null, 15, $start);
            if ($list) {
                $data = [
                    'status' => true,
                    'page' => $p,
                    'total_data' => $total_data,
                    'total_page' => $total_page,
                    'data' => $list

                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => ' data tidak ditemukan'
                ];
            }
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $data = $this->M_obat->get($id);
            if ($data) {
                $this->response(['status' => true, 'data' => $data], REST_Controller::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => $id . ' tidak ditemukan'], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {

        $data = [
            'id' => $this->post('id'),
            'nama_obat' => $this->post('nama_obat'),
            'jenis_obat' => $this->post('jenis_obat'),
            'kegunaan' => $this->post('kegunaan'),
            'stok' => $this->post('stok'),
            'harga' => $this->post('harga')
        ];

        $simpan = $this->M_obat->add($data);
        if ($simpan['status']) {
            $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data Telah Ditambahkan'], REST_Controller::HTTP_CREATED);
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], REST_CONTROLLER::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_put()
    {

        $data = [
            'id' => $this->put('id'),
            'nama_obat' => $this->put('nama_obat'),
            'jenis_obat' => $this->put('jenis_obat'),
            'kegunaan' => $this->put('kegunaan'),
            'stok' => $this->put('stok'),
            'harga' => $this->put('harga')
        ];
        $id = $this->put('id');
        $simpan = $this->M_obat->update($id, $data);
        if ($simpan['status']) {
            $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data Telah Dirubah'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], REST_CONTROLLER::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        $delete = $this->M_obat->delete($id);
        if ($delete['status']) {
            $this->response(['status' => true, 'msg' => 'Data Ke- ' . $id . ' Telah Dihapus'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['status' => false, 'msg' => $delete['msg']], REST_CONTROLLER::HTTP_INTERNAL_ERROR);
        }
    }
}
