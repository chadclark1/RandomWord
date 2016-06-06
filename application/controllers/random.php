<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('random_string')){

		} else {
			$this->session->set_userdata('random_string', "");
		}


		$this->load->view('index');
	}

	public function generate()
	{


			$string = "";

			for($i=0; $i<14; $i++){

				$random = rand(0,43);
				$character = array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","1","2","3","4","5","6","7","8","9","0","!","@","#", "$", "%", "&", "*");

				
				$string .= $character[$random];
			}

			// echo "string = " . $string; die();

			// $random_array = array(
			// 		'random_string' => $string
			// 		);

		$this->session->set_userdata('random_string', $string);

			



		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter + 1);
		} 
		else 
		{
			$this->session->set_userdata('counter', 1);
		}



		// $this->load->view('index');

		redirect("/");
	}

}