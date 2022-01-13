<?php

class Salman extends CI_Controller {
	function index(){
		$this->load->view('index_message');
	}

	function user(){
		$this->load->view('user_message');
	}

	function data(){
		echo "Halaman Data";
	}

	function profile(){
		echo "Halaman Profile";
	}

	function Torpedo(){
		echo "Halaman Torpedo";
	}

	function kopikap(){
		echo "Halaman kopikap";
	}
	
	function jajang_bold(){
		echo "Halaman jajang bold";
	}	
}
?>