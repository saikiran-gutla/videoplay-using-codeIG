<?php
class User_model extends CI_model
{
    public function user()
    {
        return ["Uname"=>"SAI","Lname"=>"Kiran"];
    }
    public function dbload()
    {
        $this->load->database();
        $this->load->helper('html');
      //  $this->db;  // to check the database is connected or not...if connected it returns nothing else displays an error...//
      echo br();
        $query = $this->db->query("select * from regdetails");

       // $query =$this->db->get("regdetails"); // fetches the complete data from the table

       // $query =$this->db->get_where('regdetails',array('SID'=>'1'));    //retreives the required data only 
        $query->result_array();
      /*  echo "</pre>";
        print_r($query->result_array());
        echo "</pre>";*/// this format will not show the data in a format so we use
        return $query->result_array();

    }
}
?>
