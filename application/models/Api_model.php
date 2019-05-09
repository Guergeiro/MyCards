<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
	public function check_key ($key) {
		if ($key !== "123456") {
			return false;
		}
		return true;
	}
}

?>