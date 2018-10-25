<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{

    function queryLogin($where, $tabel)
    {
        return $this->db->get_where($tabel,$where);
    }
}

?>