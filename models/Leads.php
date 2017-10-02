<?php 
class Leads extends model
{
	public function get_leads() {
		$sql = "SELECT * FROM leads";/* */
		$leads = $this->db->query($sql);

		return $leads;
	}

	public function salva_leads($dados) {
		$sql = "INSERT INTO leads (nome)" //precisa terminar
	}
}