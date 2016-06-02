<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('app_model');
		  $this->load->library('calendar');
		  $this->load->view('header');
		  $this->load->view('nav');
     }

	 public function upload()
	 {
		 if($this->input->post('btn_report_upload')){
		 $this->form_validation->set_rules("datepicker", "ReportDate", "trim|required");
         $this->form_validation->set_rules("product_type", "ReportType", "trim|required");
		 $report_date = $this->input->post("datepicker");
		 $report_type= $this->input->post("product_type");
		 
		 $report_date=strtotime($report_date);
		 $newformat = date('Y-m-d',$report_date);
		 $date_format_for_pdffile = date('m-d-Y',$report_date);
		 if ($this->form_validation->run() == FALSE)
          {
               //validation fails
			    if($this->input->post('btn_report_upload')){
               echo '<script>alert("Please fill mandatory fields");</script>';
			   }
			   $this->load->view('upload_report');
          }
		  else
		  {
			  if($this->input->post('btn_report_upload')){
			$report_id=$this->app_model->insert_report($report_type, $newformat);
			//echo '<script>alert("'.$report_id.'");</script>';
			if($report_id==0)
			{
				echo '<script>alert("Report already uploaded");</script>';
				$this->load->view("upload_report");
			}
			else{
				echo '<script>alert("Report added successfully");</script>';
				echo '<script>sessionStorage.report_id='.$report_id.'</script>';
				echo '<script>sessionStorage.publishdate="'.$newformat.'"</script>';
				if(strcmp("WHAT I LEARNED THIS WEEK",$report_type)==0)
				{
					$pdffilename="WILTW".$date_format_for_pdffile.".pdf";
					echo '<script>sessionStorage.pdffilename="'.$pdffilename.'"</script>';
				}
				//echo '<script>alert("'.$newformat.'");</script>';
				$this->load->view("upload_articles");
			}
			
		  }
		  }
		 }
		 //unset($_POST);
	 }
	 public function upload_articles()
	 {
		 $this->load->view('header');
		 $this->load->view('nav');
		 $report_id=$this->app_model->insert_report($report_type, $newformat);
			echo $report_id; 
			$this->load->view("upload_articles"); 
		 
	 }
	 public function update()
	 {
		 $this->load->view('header');
		 
		 $this->load->view('nav');
		 $this->load->view("test"); 
		 
	 }
	 public function edit()
	 {
		 //$this->load->view("header");
		 //$this->load->view('nav');
		 //$this->load->view('edit');
	 }
	 public function delete()
	 {
		 
		 $this->load->view('delete');
	 }
	 public function logout()
	 {
		 $this->load->view("header");
		 $this->load->view('login_view');
	 }
}?>