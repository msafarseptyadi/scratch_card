<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		// $msisdn = "VG1wSk5FNTZaelZPYW1Nd1RXcE5NVTlSUFQwPQ==";
		// $pin    = "VGxWYVEwNUZUVFJOVlZaR1RtdEtSbEZuUFQwPQ==";

		// $data = array('action'=>"CHECK_VALID", 'msisdn'=>$msisdn, 'pin'=>$pin);
		// $json_data = json_encode($data);
		// $params = http_build_query($data, NULL, '&');
		// $ch = curl_init('http://172.30.207.33/api/pointi/api_scratch_popgame.php');
	
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
																									
		// $result = curl_exec($ch);
		// curl_close($ch);
		// echo $result;

		// die;
		$this->load->view('index');
	}

	public function scratch()
	{	
		// $data = array('action'=>"GET_WINNER", 'msisdn'=>$msisdn);
		// $json_data = json_encode($data);
		// $params = http_build_query($data, NULL, '&');
		// $ch = curl_init('http://172.30.207.33/api/pointi/api_scratch_popgame.php');
	
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
																									
		// $result = curl_exec($ch);
		// curl_close($ch);
		// $get_winner = json_decode($result,true);

		// $data = array('action'=>"CHECK_VALID", 'msisdn'=>$msisdn, 'pin'=>$pin);
		// $json_data = json_encode($data);
		// $params = http_build_query($data, NULL, '&');
		// $ch = curl_init('http://172.30.207.33/api/pointi/api_scratch_popgame.php');
	
		// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
																									
		// $result = curl_exec($ch);
		// curl_close($ch);
		// $get   			 = json_decode($result,true);

		// if($get['error']==0){
		// 	$data['winner']  = $get_winner['data']; 
		// 	$data['scratch'] = $get['data'][0]; 
		// 	$data['msisdn']  = $msisdn; 
		// 	$data['pin']  	 = $pin; 
		// 	$this->load->view('scratch',$data);
		// }else{
		// 	$data['winner']  = $get_winner['data']; 
		// 	$this->load->view('scratch_ready',$data);
		// }
			$data['winner']  = "winner"; 
			$data['scratch'] = "scratch"; 
			$data['msisdn']  = "08784294232332"; 
			$data['pin']  	 = "12345"; 
			$this->load->view('scratch',$data);
	}

	public function success()
	{	
		$data = array('action'=>"SUCCESS_SCRATCH", 'msisdn'=>$_POST['msisdn'], 'pin'=>$_POST['pin'], 'id'=>$_POST['id']);
		$json_data = json_encode($data);
		$params = http_build_query($data, NULL, '&');
		$ch = curl_init('http://172.30.207.33/api/pointi/api_scratch_popgame.php');
	
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
																									
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}
}
