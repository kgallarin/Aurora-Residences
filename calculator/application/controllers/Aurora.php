<?php
/*
Created by: Oliver "Obey" Tan
obeytan8@gmail.com
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Aurora extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('88help_helper');
	}
	
	public function index()
	{
		$this->load->view('aurora_view');
	}
	
	public function calculate()
	{
		$term = $this->input->post("term");
		$unit = $this->input->post("unit");

		if(isset($unit)){
			$data["info"] = (explode("|",$unit,6));
			if($term == "Cash"){
				$result = $this->load->view('cash',$data, true);
			}
			else if($term == "50(12)50"){
				$result = $this->load->view('50(12)50',$data, true);
			}
			else if($term == "20(12)80"){
				$result = $this->load->view('20(12)80',$data, true);
			}
			else if($term == "20_80"){
				$result = $this->load->view('20_80',$data, true);
			}
			else if($term == "10_10_(12)_80"){
				$result = $this->load->view('10_10_(12)_80',$data, true);
			}
			else
			{
				$message = alertMessage("Please select a term",'danger');
				$this->session->set_flashdata('message', $message);
				redirect("Aurora/index");
			}
			echo $result;
		}
		else
		{
			$message = alertMessage("Please select a unit",'danger');
			$this->session->set_flashdata('message', $message);
			$this->session->set_flashdata('post_', $term);
			redirect("Aurora/index");
		}
	}
}
