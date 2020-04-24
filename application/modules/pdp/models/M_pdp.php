<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pdp extends CI_model{
    function pdp()
    {
        $query = $this->db->query("SELECT * FROM tb_pdp 
        LEFT JOIN tb_kabupaten ON tb_pdp.id_kabupaten = tb_kabupaten.id_kabupaten
        LEFT JOIN tb_rs_rujukan ON tb_pdp.id_rs = tb_rs_rujukan.id_rs
        ORDER BY tb_pdp.date_created DESC ");
        return $query->result();
    }
    function create_pdp($data)
    {
        $this->db->insert('tb_pdp',$data);
    }
}