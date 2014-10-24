<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_usuario extends CI_Controller {

	public  function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('m_usuario');	
	}

	public function iniciarSesion(){
		$this->form_validation->set_rules('usuario','Usuario','required|min_length[5]|alpha_dash|callback_verifica_existe');
		$this->form_validation->set_rules('contrasena','Contraseña','required|min_length[5]');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red; text-align:center;">','</div>') ;

		if ($this->form_validation->run() === FALSE){

			if(isset($this->session->userdata['logeado'])){
				$datos['logeado'] = $this->session->userdata['logeado'];
			}else{
				$datos['logeado'] = FALSE;
			}
			$this->load->view('head');
        	$this->load->view('login');        
        }else{
        	$sesion = $this->m_usuario->iniciarSesion($_POST['usuario'],$_POST['contrasena']);

        	if(empty($sesion)){
        		$data['error']	= "Contraseña invalida";
				$this->load->view('head');			
        		$this->load->view('login',$data);
        	}else{
        		$sesionUsuario = array(
                   'usuario'  			=> $sesion['nombreUsuario'],
                   'contrasena'  		=> $sesion['contrasena'],
                   'apellidoPaterno'	=> $sesion['apellidoPaterno'],
                   'apellidoMaterno'	=> $sesion['apellidoMaterno'],
                   'idUsuario'			=> $sesion['idUsuario'],
                   'idPersona'			=> $sesion['idPersona'],
                   'logeado' 			=> TRUE
               	);
				$this->session->set_userdata($sesionUsuario);

				$this->load->view('head');
				$this->load->view('principal');
        	}
        }		
	}

	public function cerrarSesion(){
		$this->session->sess_destroy();
	}

	function verifica_existe($str){
		$usuario	= $this->m_usuario->verificarUsuario($str);

		if($usuario === FALSE){
			$this->form_validation->set_message('verifica_existe','*El %s no esta registrado');
			return false;
		}else{
			return true;
		}
	}
}