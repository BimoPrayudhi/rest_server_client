<?php

class M_obat extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get($id=null, $limit=15, $offset=0)
    {
        if($id === null)
        {
            return $this->db->get('tb_obat', $limit, $offset)->result();

        } else 
        {
            return $this->db->get_where('tb_obat',['id' => $id])->result_array();
        }
    }

    public function count(){
        return $this->db->get('tb_obat')->num_rows();
    }

    public function add($data)
    {
        try{
            $this->db->insert('tb_obat', $data);
            $error= $this->db->error();
            if(!empty($error ['code']))
            {
                throw new exception('ERROR : '.$error['message']);
                return false;
            }

            return [ 'status'=>true, 'data' => $this->db->affected_rows()];
        } catch(exception $ex)
        {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->update('tb_obat', $data, ['id'=> $id]);
            $error= $this->db->error();
            if(!empty($error ['code']))
            {
                throw new exception('ERROR : '.$error['message']);
                return false;
            }

            return [ 'status'=>true, 'data' => $this->db->affected_rows()];
        } catch(exception $ex)
        {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }

    public function delete($id)
    {
        try{
            $this->db->delete('tb_obat', ['id'=> $id]);
            $error= $this->db->error();
            if(!empty($error ['code']))
            {
                throw new exception('ERROR : '.$error['message']);
                return false;
            }

            return [ 'status'=>true, 'data' => $this->db->affected_rows()];
        } catch(exception $ex)
        {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }

}
