<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication_model extends CI_Model
{
    public function signin($data)
    {
        $query = $this->db->get_where("Empresas", "Email = '{$data['Email']}'");

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

    public function signin_admin($data)
    {
        $query = $this->db->get_where("Admin", "Username = '{$data['Username']}'");
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        if (!password_verify($data["Password"], $query[0]["Password"])) {
            return false;
        }
        return $query;
    }

    public function signup_admin($data)
    {
        $query = $this->db->get_where("Admin", "Username = '{$data['Username']}'");
        $data["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
        if ($query->num_rows() == 0) {
            return $this->db->insert("Admin", $data);
        }
        return $this->db->update("Admin", $data);
    }

    public function colaborador($data)
    {
        $this->db->select("Colaboradores.Dono");
        $query = $this->db->get_where("Colaboradores", $data);
        if ($query->num_rows() == 0) {
            return false;
        }
        return $query->result_array();
    }

    public function signup($data)
    {
        $data["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
        return $this->db->insert("Empresas", $data);
    }

    public function signup_cliente($data)
    {
        $query = $this->db->get_where("Clientes", "Email = '{$data['Email']}'");
        if ($query->num_rows() != 0) {
            return false;
        }
        $data["Password"] = password_hash($data["Password"], PASSWORD_DEFAULT);
        return $this->db->insert("Clientes", $data);
    }

    public function signin_cliente($data)
    {
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
    public function codigoEmpresa($data)
    {
        $query = $this->db->get_where("Empresas", "Email = '{$data['Email']}'");
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        if (!password_verify($data["Password"], $query[0]["Password"])) {
            return false;
        }
        $this->db->where("Email", $data["Email"]);
        $this->db->set("CodigoAtivacao", $data["CodigoAtivacao"]);
        return $this->db->update("Empresas");
    }

    public function codigoCliente($data)
    {
        $query = $this->db->get_where("Clientes", "Email = '{$data['Email']}'");
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        if (!password_verify($data["Password"], $query[0]["Password"])) {
            return false;
        }
        $this->db->where("Email", $data["Email"]);
        $this->db->set("CodigoAtivacao", $data["CodigoAtivacao"]);
        return $this->db->update("Clientes");
    }

    public function recoverPassword($data)
    {
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password", password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Empresas");
    }

    public function recoverPassword_cliente($data)
    {
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password", password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Clientes");
    }

    public function updatePassword_cliente($data)
    {
        $query = $this->db->get_where("Clientes", "Email = '{$data['Email']}'");
        if (!password_verify($data["Prepassword"], $query[0]["Password"])) {
            return false;
        }
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password", password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Clientes");
    }

    public function updatePassword($data)
    {
        $query = $this->db->get_where("Empresas", "Email = '{$data['Email']}'");
        if (!password_verify($data["Prepassword"], $query[0]["Password"])) {
            return false;
        }
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Password", password_hash($data["Password"], PASSWORD_DEFAULT));
        return $this->db->update("Empresas");
    }

    public function verify($codigoAtivacao)
    {
        $query = $this->db->get_where("Empresas", "Empresas.CodigoAtivacao = {$codigoAtivacao}");
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        $this->db->where("Email", $query[0]["Email"]);
        $this->db->set("Ativo", 1);
        return $this->db->update("Empresas");
    }
    public function activate_cliente($data)
    {
        $query = $this->db->get_where("Clientes", "Clientes.Email = '{$data["Email"]}' AND Clientes.CodigoAtivacao = '{$data["CodigoAtivacao"]}'");
        if ($query->num_rows() == 0) {
            return false;
        }
        $query = $query->result_array();
        
        if (!password_verify($data["Password"], $query[0]["Password"])) {
            return false;
        }
        
        $this->db->where("Email", $data["Email"]);
        $this->db->set("Ativo", 1);
        return $this->db->update("Clientes");
    }
}
