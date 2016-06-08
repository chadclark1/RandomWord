<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('random_string')){

			// SET AND PASS DATA FROM SESSION

			$view_data = array(
				'string' => $this->session->userdata('random_string'),
				'counter' => $this->session->userdata('counter')
			);

		} else {
			$this->session->set_userdata('random_string', "");

				// SET AND PASS GENERIC START DATA HERE

				$view_data = array(
					'string' => "",
					'counter' => 0
				);
		}


		$this->load->view('index', $view_data);
	}

	public function generate()
	{


			$string = "";

			for($i=0; $i<14; $i++){

				$random = rand(0,42); // this needs to be 42, rand is inclusive and stops at max limit, is the length is 43, there is only 42 indicies to access.
				$character = array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v",
													 "b","n","m","1","2","3","4","5","6","7","8","9","0","!","@","#", "$", "%", "&", "*"); // count here is 43
				// var_dump(count($character));
				// die();
				// var_dump($random);
				// die();
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

		// PACKAGE DATA IN ARRAY
		$view_data = array(
			'string' => $string,
			'counter' => $counter
		);

		// SEND ARRAY TOO VIEW
		$this->load->view('index', $view_data);

		// redirect("/");
	}

}
