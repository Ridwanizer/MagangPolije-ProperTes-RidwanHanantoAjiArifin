<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datasekawanmedia extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       
    }
    
    public function index()
    {
      
        $url = "http://static.sekawanmedia.co.id/data";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);

        $this->load->view('datasekawanmedia', $data);
    }
}