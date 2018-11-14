<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video_control extends CI_Controller
{
    function index()
    {
        $this->load->view('video');
    }
}