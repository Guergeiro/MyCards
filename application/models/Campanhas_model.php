<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campanhas_model extends CI_Model {
	// SELECT
	public function campanha_empresa($keyCampanha, $keyEmpresa) {
		$this->db->select("Campanhas.Designacao, Campanhas.Descricao, Campanhas.DataInicio, Campanhas.DataFim, Campanhas.Valor, Campanhas.TipoCampanha, InstanciaCampanha.Utilizado, InstanciaCampanha.DataUtilizacao, InstanciaCampanha.Notificacao");
		$this->db->from("Campanhas");
		$this->db->join("InstanciaCampanha", "InstanciaCampanha.ID_Empresa = Campanhas.ID_Empresa", "inner");
		$this->db->where("Campanhas.ID_Empresa = {$keyEmpresa} AND Campanhas.ID_Campanhas = {$keyCampanha}");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function todas_campanhas_empresa($keyEmpresa) {
		$query = $this->db->get_where("Campanhas", "ID_Empresa = {$keyEmpresa}");
		return $query->result_array();
	}

	public function todas_campanhas_cartao($keyCliente, $keyEmpresa) {
		$this->db->select("InstanciaCampanha.ID_Campanha, InstanciaCampanha.ID_Cliente, InstanciaCampanha.ID_Empresa, InstanciaCampanha.Utilizado, InstanciaCampanha.DataUtilizacao, InstanciaCampanha.Notificacao, Campanhas.Designacao, Campanhas.Descricao, Campanhas.DataInicio, Campanhas.DataFim, Campanhas.Valor, Campanhas.TipoCampanha");
		$this->db->from("InstanciaCampanha");
		$this->db->join("Campanhas", "Campanhas.ID_Empresa = InstanciaCampanha.ID_Empresa", "inner");
		$this->db->where("InstanciaCampanha.ID_Cliente = {$keyCliente} AND InstanciaCampanha.ID_Empresa = {$keyEmpresa}");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function todas_campanhas_cliente($keyCliente) {
		$this->db->select("InstanciaCampanha.ID_Campanha, InstanciaCampanha.ID_Cliente, InstanciaCampanha.ID_Empresa, InstanciaCampanha.Utilizado, InstanciaCampanha.DataUtilizacao, InstanciaCampanha.Notificacao, Campanhas.Designacao, Campanhas.Descricao, Campanhas.DataInicio, Campanhas.DataFim, Campanhas.Valor, Campanhas.TipoCampanha");
		$this->db->from("InstanciaCampanha");
		$this->db->join("Campanhas", "Campanhas.ID_Empresa = InstanciaCampanha.ID_Empresa", "inner");
		$this->db->where("InstanciaCampanha.ID_Cliente = {$keyCliente}");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function todas_instanciascampanhas_empresa($keyEmpresa) {
		$query = $this->db->get_where("InstanciaCampanha", "ID_Empresa = {$keyEmpresa}");
		return $query->result_array();
	}

	// UPDATE
	public function ativar_instanciacampanha_cartao($data) {
		$this->db->where("InstanciaCampanha.ID_Cliente = {$data['ID_Cliente']} AND InstanciaCampanha.ID_Empresa = {$data['ID_Empresa']} AND InstanciaCampanha.ID_Campanha = {$data['ID_Campanha']}");
        $this->db->set("Utilizado","1");
        return($this->db->update("InstanciaCampanha"));
	}

	public function notificar_instanciacampanha_cartao($data) {
		$this->db->where("InstanciaCampanha.ID_Cliente = {$data['ID_Cliente']} AND InstanciaCampanha.ID_Empresa = {$data['ID_Empresa']} AND InstanciaCampanha.ID_Campanha = {$data['ID_Campanha']}");
        $this->db->set("Notificacao","1");
        return($this->db->update("InstanciaCampanha"));
	}

	public function desnotificar_instanciacampanha_cartao($data) {
		$this->db->where("InstanciaCampanha.ID_Cliente = {$data['ID_Cliente']} AND InstanciaCampanha.ID_Empresa = {$data['ID_Empresa']} AND InstanciaCampanha.ID_Campanha = {$data['ID_Campanha']}");
        $this->db->set("Notificacao","0");
        return($this->db->update("InstanciaCampanha"));
	}
}

?>