<?php

use GuzzleHttp\Client;

class M_obat_client extends CI_model
{

  private $_client;
  public function __construct()
  {
    $this->_client = new Client([
      'base_uri' => 'http://localhost/rest_server_bimo/',

    ]);
  }


  public function getAllObat()
  {

    $response = $this->_client->request('GET', 'obat');
    $result = json_decode($response->getbody()->getContents(), true);

    return $result['data'];
  }

  public function getObatById($id)
  {
    $response = $this->_client->request('GET', 'obat', [
      'query' => [
        'id' => $id
      ]
    ]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result['data'][0];
  }

  public function tambahDataObat()
  {
    $data = [
      'nama_obat' => $this->input->post('nama_obat', true),
      'jenis_obat' => $this->input->post('jenis', true),
      'kegunaan' => $this->input->post('kegunaan', true),
      'stok' => $this->input->post('stok', true),
      'harga' => $this->input->post('harga', true)
    ];
    $response = $this->_client->request('POST', 'obat', [
      'form_params' => $data
    ]);
    $result = json_decode($response->getbody()->getContents(), true);
    return $result;
  }

  public function hapusDataObat($id)
  {
    $response = $this->_client->request('DELETE', 'obat', [
      'form_params' => [
        'id' => $id
      ]
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result;
  }

  public function ubahDataObat()
  {
    $data = [
      'id' => $this->input->post('id', true),
      'nama_obat' => $this->input->post('nama_obat', true),
      'jenis_obat' => $this->input->post('jenis', true),
      'kegunaan' => $this->input->post('kegunaan', true),
      'stok' => $this->input->post('stok', true),
      'harga' => $this->input->post('harga', true)
    ];

    $response = $this->_client->request('PUT', 'obat', [
      'form_params' => $data
    ]);
    $result = json_decode($response->getbody()->getContents(), true);

    return $result;
  }
}
