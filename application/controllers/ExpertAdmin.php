<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * @property CI_Input $input
	 * @property DB_Model $DB_Model
	 */
	class ExpertAdmin extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('cookie');
			$this->load->model('DB_Model');
		}
		
		public function index(): void {
			// 判断用户登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 将用户信息解码
				$userinfo = json_decode($_COOKIE['isLogin'], true);
				// 重定向到个人信息界面
				header('Location:' . site_url($userinfo['type'] . '/info'));
			} else {
				// 用户登录信息不存在，返回登录界面
				header('Location:' . site_url('/login'));
			}
		}
		
		public function info(): void {
			// 判断用户登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 将用户信息解码
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 返回用户信息界面
				$data['active'] = 'info';
				$this->load->view('header', $data);
				$this->load->view('Expert/nav', $data);
				$this->load->view('Expert/info', $data);
				$this->load->view('footer', $data);
			} else {
				// 用户登录信息不存在，返回登录界面
				header('Location:' . site_url('/login'));
			}
		}
		
		public function info_update(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取用户信息
				$updateInfo = $this->input->post();
				if ($updateInfo['pwd'] != $updateInfo['confirm_pwd']) {
					echo "<script>alert('密码输入不一致，重新输入！'); history.go(-1)</script>";
					exit();
				}
				// 获取用户ID
				$id = $updateInfo['id'];
				// 删除用户确认密码和用ID
				unset($updateInfo['id'], $updateInfo['confirm_pwd']);
				// 根据type添加remarks
				if ($updateInfo['type'] == 'expert') {
					$updateInfo['remarks'] = '评审专家';
				} elseif ($updateInfo['type'] == 'school') {
					$updateInfo['remarks'] = '校级管理员';
				} elseif ($updateInfo['type'] == 'admin') {
					$updateInfo['remarks'] = '系统管理员';
				}
				// 构建条件
				$condition = array('id'=>$id);
				// 更新用户信息
				$res = $this->DB_Model->update('users', data: $updateInfo, condition: $condition);
				// 判断用户信息是否更新成功
				if ($res) {
					$userinfo = $this->DB_Model->select('users', condition: $condition)[0];
					setcookie('isLogin', json_encode($userinfo),  time() + 60 * 60);
					echo '<script>alert("用户信息修改成功！"); window.location.href="' . site_url($userinfo['type'] . '/info') . '"</script>';
				} else {
					echo '<script>alert("修改失败，请稍后再试！"); history.go(-1); </script>';
				}
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function system() {
		
		}
		
		public function aim() {
		
		}
		
		public function analysis() {
		
		}
		
		public function evaluate() {
		
		}
		
    }
