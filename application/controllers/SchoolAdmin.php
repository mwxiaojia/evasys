<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * @property CI_Input $input
	 * @property DB_Model $DB_Model
	 */
	class SchoolAdmin extends CI_Controller {
		
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
				if ($data['userinfo']['university'] == -1) {
					echo '<script>alert("请完善用户学校信息！"); </script>';
				}
				// 返回用户信息界面
				$data['active'] = 'info';
				// 获取大学学校信息
				$data['university'] = $this->DB_Model->select('university');
				$this->load->view('header', $data);
				$this->load->view('School/nav', $data);
				$this->load->view('School/info', $data);
				$this->load->view('footer', $data);
			} else {
				// 用户登录信息不存在，返回登录界面
				header('Location:' . site_url('/login'));
			}
		}
		
		public function info_update() {
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
				$this->load->view('School/nav', $data);
				$this->load->view('School/system', $data);
				$this->load->view('footer', $data);
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
				$this->load->view('School/nav', $data);
				$this->load->view('School/system', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:' . site_url('/login'));
			}
		}
		
		public function evaluate(): void {
			// 判断用户是否登录信息是否存在
			if (isset($_COOKIE['isLogin'])) {
				$data['active'] = 'evaluate';
				
				// 解码用户信息
				$userinfo = json_decode($_COOKIE['isLogin'], true);
				
				// 返回用户信息
				$data['userinfo'] = $userinfo;
				// 查找学校的名称
				$data['university'] = $this->DB_Model->select('university', condition: array('id'=>$userinfo['university']))[0]['name'];
				
				// 查找属于该用户学校评价结果
				$eva_result = $this->DB_Model->select('eva_result', condition: array('university' => $userinfo['university']), order: array('id'=>'ASC'));
				
				$trend = array();
				// 计算每次评价的总分
				foreach ($eva_result as $num => $value) {
					// 删除和评价无关的信息
					unset($value['id'], $value['university'], $value['system'], $value['evaluate']);
					// 计算总分
					$trend[$num+1] = array_sum(array_diff($value, [-1]));
				}
				
				$data['trend'] = $trend;
				/**
				 *
				 * 数组 0: array(一级指标相关数据，二级指标相关数据，体系数据，评价结果数据);
				 *
				 */
				
				$eva_results = array();
				
				foreach ($eva_result as $num => $v) {
					
					$evaluateResult = $v;
					
					// 人才培养
					$personnelTrain = array('精品课程' => 'ps', '交叉学科' => 'ind', '自设学科' => 'sed', '国际交流' => 'ie', '拔尖创新人才' => 'tit', '复合应用人才' => 'cat', '硕博论文数量' => 'nmdt', '本科生就业率' => 'uer');
					// 教学资源
					$teachResources = array('师资质量' => 'qs', '教授授课' => 'tp', '院士数量' => 'na', '科研平台' => 'rp', '学术期刊' => 'aj');
					// 科学研究
					$scientificResearch = array('涉农科技成果' => 'asta', '核心期刊论文' => 'cjp', '新农科项目' => 'nasp', '国家科技进步奖' => 'ssta', '省部级奖励' => 'pmlr');
					// 社会声誉
					$socialReputation = array('实践项目' => 'pp', '基金项目' => 'fp', '涉农专利' => 'ap', '国内声誉' => 'dr', '国际声誉' => 'ir');
					// 所有指标
					$indicators = array('精品课程' => 'ps', '交叉学科' => 'ind', '自设学科' => 'sed', '国际交流' => 'ie', '拔尖创新人才' => 'tit', '复合应用人才' => 'cat', '硕博论文数量' => 'nmdt', '本科生就业率' => 'uer', '师资质量' => 'qs', '教授授课' => 'tp', '院士数量' => 'na', '科研平台' => 'rp', '学术期刊' => 'aj', '涉农科技成果' => 'asta', '核心期刊论文' => 'cjp', '新农科项目' => 'nasp', '国家科技进步奖' => 'ssta', '省部级奖励' => 'pmlr', '实践项目' => 'pp', '基金项目' => 'fp', '涉农专利' => 'ap', '国内声誉' => 'dr', '国际声誉' => 'ir');
					
					// 人才培养名称，评分对应
					foreach ($personnelTrain as $item => $value) {
						$personnelTrain[$item] = $evaluateResult[$value];
					}
					
					// 教学资源名称，评分对应
					foreach ($teachResources as $item => $value) {
						$teachResources[$item] = $evaluateResult[$value];
					}
					
					// 科学研究名称，评分对应
					foreach ($scientificResearch as $item => $value) {
						$scientificResearch[$item] = $evaluateResult[$value];
					}
					
					// 社会声誉名称，评分对应
					foreach ($socialReputation as $item => $value) {
						$socialReputation[$item] = $evaluateResult[$value];
					}
					
					// 所有指标名称，评分对应
					foreach ($indicators as $item => $value) {
						$indicators[$item] = $evaluateResult[$value];
					}
					
					// 删除-1值
					$personnelTrain = array_diff($personnelTrain, [-1]);
					$teachResources = array_diff($teachResources, [-1]);
					$scientificResearch = array_diff($scientificResearch, [-1]);
					$socialReputation = array_diff($socialReputation, [-1]);
					$indicators = array_diff($indicators, [-1]);
					
					
					// 首先计算出来所有的值
					$score = array_sum($indicators);
					
					// 一级指标数组
					$findicators = array('人才培养'=>array_sum($personnelTrain), '教学资源'=>array_sum($teachResources), '科学研究'=>array_sum($scientificResearch), '社会声誉'=>array_sum($socialReputation));
					
					// 二级指标
					$sindicators = $indicators;
					
					$system = $this->DB_Model->select('system', condition: array('id'=>$v['system']))[0];
					
					$evaluate = $this->DB_Model->select('evaluate', condition: array('id'=>$v['evaluate']))[0];
					
					$eva_results[$num+1] = array('score'=>$score, 'findicators'=>$findicators, 'sindicators'=>$sindicators, 'system'=>$system, 'evaluate'=>$evaluate);
				}
				
				$data['eva_results'] = $eva_results;
				
				// 返回前端界面
				$this->load->view('header', $data);
				$this->load->view('School/nav', $data);
				$this->load->view('School/eva_result', $data);
				$this->load->view('footer', $data);
			} else {
				header('Location:' . site_url('/login'));
			}
		}
		
    }
