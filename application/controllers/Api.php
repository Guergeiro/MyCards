<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Api extends CI_Controller {
	public function test($nome = "ola") {
		$object = array(
			"nome"=> $nome
		);
		return jscon_encode($object);
	}
}
?>
