<?php 
class BlogPost extends model 
{
	public function get_active_blog_post() {
		$array = array();

		$sql = "SELECT * FROM blog_post where status = 1";/* */
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			return true;
		}

		return false;
	}

	public function get_single_blog_post($id) {
		$array = array();

		$sql = "SELECT * FROM blog_post WHERE id = " . $id;
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			return true;
		}

		return false;
	}

	public function salva_blog_post($dados)
	{
	    $sql = "INSERT INTO blog_post (titulo, subtitulo, conteudo, status) values ('".$dados['titulo']."','".$dados['subtitulo']."','".$dados['conteudo']."', '".$dados['status']."') ";
	    $sql = $this->db->query($sql);
	}
}