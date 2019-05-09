<?php
/**
 * Created by PhpStorm.
 * User: Liu
 * Date: 2019-05-07
 * Time: 18:45
 */

class News extends CI_Controller
{
     public function __construct()
     {
         parent::__construct();
     }

     public function type(){

     }

     public function detail(){

         $id = $this->input->get_post('id');

         $news=$this->db->select()->from('news')->where('id',$id)->limit(1)->get()->row_array();

         $sys= $this->db->select()->from('sys')->get()->row_array();

         $url = $this->db->select()->from('url')->get()->result_array();

         $classList = $this->db->select()->from('news_type')->get()->result_array();

         $class= $this->db->select()->from('news_type')->where('id',$news['type_id'])->get()->row_array();

         $this->load->view('detail.html',array('detail'=>$news,'sys'=>$sys,'url'=>$url,'classList'=>$classList,'class'=>$class));
     }

     public function newsList(){

             $type = $this->input->get_post('type');

             $page = $this->input->get_post('page');

             $newsList=$this->db->select()->from('news')->where('type_id',$type)->get()->result_array();

             $classList = $this->db->select()->from('news_type')->get()->result_array();

             $class= $this->db->select()->from('news_type')->where('id',$type)->get()->row_array();

             $sys= $this->db->select()->from('sys')->get()->row_array();

             $url = $this->db->select()->from('url')->get()->result_array();

            $this->load->view('list.html',array('list'=>$newsList,'sys'=>$sys,'url'=>$url,'classList'=>$classList,'class'=>$class));
     }
}