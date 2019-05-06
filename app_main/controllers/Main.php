<?php
/**
 * Created by PhpStorm.
 * User: Liu
 * Date: 2019-05-06
 * Time: 17:02
 */

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->load->view('index.html');
    }


    public function page_list(){

    }

    public function page_detail(){

    }


}