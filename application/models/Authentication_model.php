<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{

    public function signin($data){
        $query = $this->db->get_where("Empresas", "Email = '{$data['email']}'");

        if ($query->num_rows() == 0) {
            return "email";
        }
        $query = $query->result_array();
        if (!password_verify($data["password"], $query[0]["Password"])) {
            return "email";
        }
        if ($query[0]["Ativo"] == 0) {
            return "ativo";
        }
        return $query;
    }

    public function colaborador($data) {
        $this->db->select("Colaboradores.Dono");
        $query = $this->db->get_where("Colaboradores", $data);
        if ($query->num_rows() == 0) {
            return FALSE;
        }
        return $query->result_array();
    }

    public function signup($data) {
        $data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
        return $this->db->insert("Empresas", $data);
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
