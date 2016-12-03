<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_auth
{
	protected $ci;

	function __construct()
	{
        $this->ci =& get_instance();
	}

	public function login($name, $pass)
	{
		if ($name == 'asd' && $pass == 123) {
			return true;
		}else{
			return false;
		}
	}

	

}

/* End of file Api_auth.php */
/* Location: ./application/libraries/Api_auth.php */
