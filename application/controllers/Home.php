<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
    class Home extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('cookie');
			$this->load->helper('DB_Model');
		}
		
		public function index() {
			
			echo 'index';
		}
		
		public function login() {
			// 判断访问的方式
			if (!IS_POST) {
				// 非POST方式访问
				if (isset($_COOKIE['isLogin'])) {
					header("location:".site_url('index'));
				} else {
					$this->load->view('login');
				}
			} else {
			
			}
		
		}
		
		public function reg() {
		
		}
		
		public function reset() {
		
		}
		
		public function test() {
			echo 'test';
		}
		
		
    }
