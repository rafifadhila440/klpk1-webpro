<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelPaket extends CI_Model{
    //manajemen Paket
    public function getPaket()
    {
        return $this->db->get('paket');
    }
    public function PaketWhere($where)
    {
        return $this->db->get_where('paket', $where);
    }
    public function simpanPaket($data = null)
    {
        $this->db->insert('paket', $data);
    }
    public function updatePaket($data = null, $where = null)
    {
        $this->db->update('paket', $data, $where);
    }
    public function hapusPaket($where = null)
    {
        $this->db->delete('paket', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }

        $this->db->from('paket');
        return $this->db->get()->row($field);
    }
    
    public function getPesanan()
    {
        return $this->db->get('pesanan');
    }
    public function PesananWhere($where)
    {
        return $this->db->get_where('pesanan', $where);
    }
    public function simpanPesanan($data = null)
    {
        $this->db->insert('pesanan', $data);
    }
    public function updatePesanan($data = null, $where = null)
    {
        $this->db->update('pesanan', $data, $where);
    }
    public function hapusPesanan($where = null)
    {
        $this->db->delete('pesanan', $where);
    }
    public function totalPesanan($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }

        $this->db->from('pesanan');
        return $this->db->get()->row($field);
    }
}