<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	 public function __construct() {
		  parent::__construct();
		  
     }
	public function index()
	{ 
		$result['data'] = $this->getData();
		$result['global'] = $this->getGlobal();
		$result['positif'] = $this->getPositif();
		$result['meninggal'] = $this->getMeninggal();
		$result['sembuh'] = $this->getSembuh();
		$result['prov'] = $this->getDataProv();
		$this->load->view('main',$result);
	}
	public function getData()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result[0];
	}
	public function getDataProv()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/indonesia/provinsi/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}

	public function getGlobal()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}
	public function getPositif()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/positif/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}
	public function getSembuh()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/sembuh/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}
	public function getMeninggal()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.kawalcorona.com/meninggal/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		$result = json_decode($result, true);
		return $result;
	}
}
