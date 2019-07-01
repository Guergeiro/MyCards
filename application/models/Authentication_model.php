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

	public function signin_admin($data) {
		$query = $this->db->get_where("Admin", "Username = '{$data['username']}'");
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		$query = $query->result_array();
		if (!password_verify($data["password"], $query[0]["Password"])) {
			return FALSE;
		}
		return $query;
	}

	public function signup_admin($data) {
		$query = $this->db->get_where("Admin", "Username = '{$data['username']}'");
		$data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
		if ($query->num_rows() == 0) {
			return $this->db->insert("Admin", $data);
		}
        return $this->db->update("Admin", $data);
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

	public function signup_cliente($data) {
		$data["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
		return $this->db->insert("Clientes", $data);
	}

	public function signin_cliente($data){
        $query = $this->db->get_where("Clientes", "Email = '{$data['Email']}'");

        if ($query->num_rows() == 0) {
            return "email";
        }
        $query = $query->result_array();
        if (!password_verify($data["Password"], $query[0]["Password"])) {
            return "email";
        }
        if ($query[0]["Ativo"] == 0) {
            return "ativo";
        }
        return $query;
    }

    public function recoverPassword($data)
    {   
		
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Empresas");
    }

	public function recoverPassword_cliente($data)
    {   
		
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Clientes");
    }

	public function updatePassword_cliente($data)
    {
		$query = $this->db->get_where("Clientes", "Email = '{$data['Email']}'");
		if (!password_verify($data["password"], $query[0]["Password"])) {
            return FALSE;
        }
		$this->db->where("Email", $data["Email"]);
		$this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Clientes");
    }

    public function updatePassword($data)
    {
		$query = $this->db->get_where("Empresas", "Email = '{$data['Email']}'");
		if (!password_verify($data["password"], $query[0]["Password"])) {
            return FALSE;
        }
		$this->db->where("Email", $data["Email"]);
		$this->db->set("Password",password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Empresas");
    }

    public function verify($md5Email) {
        $query = $this->db->get("Empresas");
        $query = $query->result_array();
        foreach($query as $row) {
            if (md5($row["Email"]) === $md5Email) {
                $this->db->where("Email", $row["Email"]);
                $this->db->set("Ativo",1);
                return $this->db->update("Empresas");
            }
        }
    }
}
