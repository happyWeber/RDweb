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

//        $this->db->select()->from()->where()->get()->result_array();
        $noticeList=$this->db->select()->from('news')->where('type_id',1)->limit(4)->order_by('id','desc')->get()->result_array();
        $notice=$this->db->select()->from('news')->where('type_id',1)->limit(1)->get()->row_array();
        $work=$this->db->select()
            ->from('news')
            ->where('type_id',3)
            ->limit(4)
            ->order_by('id','desc')
            ->get()
            ->result_array();
        $annon=$this->db->select()->from('news')->where('type_id',2)->get()->row_array();

        $annonListLeft=$this->db->select()->from('news')->where('type_id',2)->limit(4,0)->order_by('id','desc')->get()->result_array();
        $annonListRight=$this->db->select()->from('news')->where('type_id',2)->limit(4,4)->order_by('id','desc')->get()->result_array();

        $sys= $this->db->select()->from('sys')->get()->row_array();

        $url = $this->db->select()->from('url')->get()->result_array();


        $data=array(
            'annon'=>$annon,
            'work'=>$work,
            'noticeList'=>$noticeList,
            'notice'=>$notice,
            'url'=>$url,
            'sys'=>$sys,
            'annonListLeft'=>$annonListLeft,
            'annonListRight'=>$annonListRight);

        $this->load->view('index.html',$data);
    }


    public function page_list(){

    }

    public function page_detail(){

    }


}