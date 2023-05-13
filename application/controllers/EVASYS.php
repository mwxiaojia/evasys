<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * @property CI_Input $input
	 * @property DB_Model $DB_Model
	 */
	class EVASYS extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('cookie');
			$this->load->model('DB_Model');
		}
		
		public function login(): void {
			// 判断访问方式是不是POST方式
			if (!IS_POST) {
				// 判断浏览器中是否存在登录信息
				if (isset($_COOKIE['isLogin'])) {
					// 登录状态直接返回主页
					header("Location:".site_url('index'));
				} else {
					// 不存在，返回登录界面
					$this->load->view('login');
				}
			} else {
				// 获取前端的用户信息
				$loginInfo = $this->input->post();
				// 查询用户信息是否在数据库中存在
				$userinfo = $this->DB_Model->select('users', condition: $loginInfo);
				if ($userinfo != null && count($userinfo[0])) {
					// 登录信息存在，直接返回主页
					set_cookie('isLogin', json_encode($userinfo[0]), time() + 60 * 60);
					header('Location:' . site_url('/index'));
				} else {
					echo "<script>alert('用户名或密码错误，请重试！'); history.go(-1); </script>";
				}
			}
		}
		
		public function reg() {
			# 判断访问的方式是不是POST方式
			if (!IS_POST) {
				// 非POST访问
				if (isset($_COOKIE['isLogin'])) {
					// 登录状态存在，直接返回主页
					header("Location:" . site_url('/index'));
				} else {
					$this->load->view('reg');
				}
			} else {
				// 获取前端输入的用户注册信息
				$regInfo = $this->input->post();
				// 用户密码输入不一致的提示信息
				if ($regInfo['pwd'] != $regInfo['confirm_pwd']) {
					echo "<script>alert('密码输入不一致，重新输入！'); history.go(-1)</script>";
					exit();
				}
				// 删除前端传过来的两个内容
				unset($regInfo['registerAgree'], $regInfo['confirm_pwd']);
				// 添加备注信息
				if ($regInfo['type'] == 'expert') {
					$regInfo['remarks'] = '评审专家';
				} elseif ($regInfo['type'] == 'school') {
					$regInfo['remarks'] = '校级管理员';
				} elseif ($regInfo['type'] == 'admin') {
					$regInfo['remarks'] = '系统管理员';
				}
				// 用户输入的用户名
				$username = array('name' => $this->input->post('name'));
				// 查询当前用户名是否存在
				$userinfo = $this->DB_Model->select('users', condition: $username);
				// 用户存在
				if (count($userinfo)) {
					echo "<script>alert('用户名已经存在，请换个用户名注册！'); history.go(-1); </script>";
				} else {
					// 将用户信息写入数据库
					$res = $this->DB_Model->insert('users', $regInfo);
					if ($res) {
						// 跳转到登录界面
						echo "<script>alert('用户注册成功，请登录！'); location.href='".site_url('/login')."'; </script>";
					} else {
						echo "<script>alert('用户注册失败，请稍候再试！'); history.go(-1); </script>";
					}
				}
			}
		}
		
		public function reset() {
			# 判断访问的方式是不是POST方式
			if (!IS_POST) {
				// 非POST访问
				if (isset($_COOKIE['isLogin'])) {
					// 登录状态存在，直接返回主页
					header("Location:" . site_url('/index'));
				} else {
					$this->load->view('reset');
				}
			} else {
				echo 1;
			}
		}
		
		public function index() {
			# 判断访问的方式是不是POST方式
			if (!IS_POST) {
				// 非POST访问
				if (isset($_COOKIE['isLogin'])) {
					// 登录状态存在，直接返回主页
					// 根据账户类型返回相应的界面
					echo 1;
				} else {
					header("Location:".site_url('/login'));
				}
			}
		}
		
    }
