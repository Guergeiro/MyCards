<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{

    public function signin($data){

        $condition = "Email = '{$data['email']}' AND Password='{$data['password']}'";

        $query = $this->db->get_where("Empresas", $condition);

        if ($query->num_rows() == 0) {
            return FALSE;
        }

        return $query->result_array();
    }

    public function signup($data)
    {
        $condition = "Email='{$data['email']}'";

        $query = $this->db->get_where("Empresas", $condition);

        if ($query->num_rows() == 0) {
            $this->db->insert("Empresas", $data);
        }
    }

    public function recoverPassword($data)
    {   
		
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password",$data["Password"]);
        return$this->db->update("Empresas");
    }

    public function updatePassword($data)
    {
		$this->db->where("Email", $data["Email"]);
		$this->db->set("Password",$data["Password"]);
        return $this->db->update("Empresas");
    }
}
