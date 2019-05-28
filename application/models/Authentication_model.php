<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{

    public function signin($data){

        $query = $this->db->get_where("Empresas", "Email = '{$data['email']}'");

        if ($query->num_rows() == 0) {
            return FALSE;
        }
        $query = $query->result_array();
        if (!password_verify($data["password"], $query[0]["Password"])) {
            return FALSE;
        }

        return $query;
    }

    public function signup($data)
    {
        $query = $this->db->get_where("Empresas", "Email='{$data['email']}'");

        if ($query->num_rows() == 0) {
            $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
            $this->db->insert("Empresas", $data);
        }
    }

    public function recoverPassword($data)
    {   
		
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return$this->db->update("Empresas");
    }

    public function updatePassword($data)
    {
		$this->db->where("Email", $data["Email"]);
		$this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Empresas");
    }
}
