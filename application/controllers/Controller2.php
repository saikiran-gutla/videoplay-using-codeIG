<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller2 extends CI_controller
{
	function index()
	{
		echo"this is the default index that will be called";
	}
	function marqee()
	{
		echo"<marquee>hello i am the control functi text written</marquee>";
	}
	public function callview()
	{
		$this->load->view('myindex2');
	}
	public function name()
	{
		$this->load->model('details');
		$name= $this->details->print();
		echo "FirstName=>".$name;
	}
	public function naam()
	{
		$this->load->model('Object','o');
		$name=$this->o->name();
		echo "The name is".$name;
	}
}
?>