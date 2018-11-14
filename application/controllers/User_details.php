<?php
class User_details extends CI_controller
{
    function index()
    {
    $this->load->model('User_model');
    $data['userarray']=$this->User_model->dbload();
    $this->load->view('User_view',$data); // here the data is passing the userarray values to the user view to access them.
    }
}
?>