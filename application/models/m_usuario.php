<?php

class M_usuario extends CI_Model{

	public function __construct(){
		
		$this->load->database();
	}

	public function verificarUsuario($usuario){
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('nombreUsuario',$usuario);

		$query = $this->db->get();

		if(empty($query)){
			return false;
		}else{
			return true;
		}
	}

	public function iniciarSesion($user, $pass){
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->join('persona','usuario.idUsuario = persona.idUsuario','inner');
		$this->db->where('nombreUsuario',$user);
		$this->db->where('contrasena',$pass);

		$query = $this->db->get();

		if(empty($query)){
			return false;
		}else{
			return $query->row_array();
		}
	}
}