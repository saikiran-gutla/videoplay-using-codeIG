<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_controller extends CI_Controller
{
	public function index()
	{
		$this->load->view('myindex');
	echo "this is my new controller written";
	}
	public function hello()
	{
		echo "<script>
		alert('hello this is my ...hello function with an alert box');
		document.write('welcome....this is showing after clicking on alert box');
		</script>";

	}
}