<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * @property CI_Input $input
	 * @property DB_Model $DB_Model
	 */
    class SystemAdmin extends CI_Controller {
		
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
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/info', $data);
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
		
		public function university(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				$data['active'] = 'university';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找学校信息
				$data['university'] = $this->DB_Model->select('university');
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/university', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function university_add(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取输入的学校信息
				$universityInfo = $this->input->post();
				// 将用户信息写入数据库
				$res = $this->DB_Model->insert('university', $universityInfo);
				if ($res) {
					// 跳转到学校信息界面
					echo "<script>alert('学校信息添加成功！');</script>";
				} else {
					echo "<script>alert('学校信息添加失败，请稍候再试！');</script>";
				}
				// 返回学校信息界面
				echo "<script>window.location.href = '".site_url('/admin/university')."'; </script>";
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function university_del(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取学校ID
				$condition = $this->input->get();
				// 将用户信息写入数据库
				$res = $this->DB_Model->delete('university', condition: $condition);
				if ($res) {
					// 跳转到登录界面
					echo "<script>alert('学校信息删除成功！');</script>";
				} else {
					echo "<script>alert('学校信息删除失败，请稍候再试！');</script>";
				}
				// 返回学校信息界面
				echo "<script>window.location.href = '".site_url('/admin/university')."'; </script>";
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function university_search(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取输入的值范围
				$like = $this->input->post();
				$data['active'] = 'university';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找学校信息
				$data['university'] = $this->DB_Model->select('university', like: $like);
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/university', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function university_update(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取学校信息
				$updateInfo = $this->input->post();
				// 获取学校ID
				$id = $updateInfo['id'];
				// 删除学校ID
				unset($updateInfo['id']);
				// 构建条件
				$condition = array('id'=>$id);
				// 更新学校信息
				$res = $this->DB_Model->update('university', data: $updateInfo, condition: $condition);
				// 判断学校信息是否更新成功
				if ($res) {
					echo '<script>alert("学校信息修改成功！");</script>';
				} else {
					echo '<script>alert("学校失败，请稍后再试！");</script>';
				}
				// 返回学校信息界面
				echo "<script>window.location.href = '".site_url('/admin/university')."'; </script>";
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function user(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				$data['active'] = 'user';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找学校信息
				$data['users'] = $this->DB_Model->select('users');
				$data['university'] = $this->DB_Model->select('university');
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/user', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function user_del(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取用户ID
				$condition = $this->input->get();
				// 将用户信息写入数据库
				$res = $this->DB_Model->delete('users', condition: $condition);
				if ($res) {
					// 跳转到用户信息界面
					echo "<script>alert('用户信息删除成功！');</script>";
				} else {
					echo "<script>alert('用户信息删除失败，请稍候再试！');</script>";
				}
				// 返回学校信息界面
				echo "<script>window.location.href = '".site_url('/admin/user')."'; </script>";
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function user_search(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取输入的值范围
				$like = $this->input->post();
				$data['active'] = 'user';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找用户信息
				$data['users'] = $this->DB_Model->select('users', like: $like);
				// 查找学校信息
				$data['university'] = $this->DB_Model->select('university');
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/user', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:'.site_url('/login'));
			}
		}
		
		public function system(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				$data['active'] = 'system';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找体系指标信息
				$data['systems'] = $this->DB_Model->select('system', condition: array('id !=' => '-1'));
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/system', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:' . site_url('/login'));
			}
		}
		
		public function system_del(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取用户ID
				$condition = $this->input->get();
				// 将评价体系从数据库中删除
				$res = $this->DB_Model->delete('system', condition: $condition);
				if ($res) {
					// 跳转到用户信息界面
					echo "<script>alert('评价体系删除成功！');</script>";
				} else {
					echo "<script>alert('评价体系删除失败，请稍候再试！');</script>";
				}
				// 返回学校信息界面
				echo "<script>window.location.href = '" . site_url('/admin/system') . "'; </script>";
			} else {
				header('Location:' . site_url('/login'));
			}
		}
		
		public function system_search(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				// 获取输入的值范围
				$like = $this->input->post();
				$data['active'] = 'system';
				// 解码用户信息
				$data['userinfo'] = json_decode($_COOKIE['isLogin'], true);
				// 查找体系指标信息
				$data['systems'] = $this->DB_Model->select('system', condition: array('id !=' => '-1'), like: $like);
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('Admin/nav', $data);
				$this->load->view('Admin/system', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:' . site_url('/login'));
			}
		}
 	
		public function analysis() {
		
		}
		
		public function analysis_chart() {
		
		}
		
    }
