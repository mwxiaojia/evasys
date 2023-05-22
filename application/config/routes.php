<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	
	/*
	| -------------------------------------------------------------------------
	| URI ROUTING
	| -------------------------------------------------------------------------
	| This file lets you re-map URI requests to specific controller functions.
	|
	| Typically there is a one-to-one relationship between a URL string
	| and its corresponding controller class/method. The segments in a
	| URL normally follow this pattern:
	|
	|	example.com/class/method/id/
	|
	| In some instances, however, you may want to remap this relationship
	| so that a different class/function is called than the one
	| corresponding to the URL.
	|
	| Please see the user guide for complete details:
	|
	|	https://codeigniter.com/userguide3/general/routing.html
	|
	| -------------------------------------------------------------------------
	| RESERVED ROUTES
	| -------------------------------------------------------------------------
	|
	| There are three reserved routes:
	|
	|	$route['default_controller'] = 'welcome';
	|
	| This route indicates which controller class should be loaded if the
	| URI contains no data. In the above example, the "welcome" class
	| would be loaded.
	|
	|	$route['404_override'] = 'errors/page_missing';
	|
	| This route will tell the Router which controller/method to use if those
	| provided in the URL cannot be matched to a valid route.
	|
	|	$route['translate_uri_dashes'] = FALSE;
	|
	| This is not exactly a route, but allows you to automatically route
	| controller and method names that contain dashes. '-' isn't a valid
	| class or method name character, so it requires translation.
	| When you set this option to TRUE, it will replace ALL dashes in the
	| controller and method URI segments.
	|
	| Examples:	my-controller/index	-> my_controller/index
	|		my-controller/my-method	-> my_controller/my_method
	*/
	$route['default_controller'] = 'EVASYS';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;
	
	// 基础模块
	$route['login'] = 'EVASYS/login';
	$route['reg'] = 'EVASYS/reg';
	$route['reset'] = 'EVASYS/reset';
	$route['index'] = 'EVASYS/index';
	$route['logout'] = 'EVASYS/logout';
	
	// 专家模块
	$route['expert'] = 'ExpertAdmin/index';
	$route['expert/info'] = 'ExpertAdmin/info';
	$route['expert/info/update'] = 'ExpertAdmin/info_update';
	$route['expert/system'] = 'ExpertAdmin/system';
	$route['expert/system/add'] = 'ExpertAdmin/system_add';
	$route['expert/system/del'] = 'ExpertAdmin/system_del';
	$route['expert/system/search'] = 'ExpertAdmin/system_search';
	$route['expert/evaluate'] = 'ExpertAdmin/evaluate';
	$route['expert/evaluate/system'] = 'ExpertAdmin/evaluate_system';
	$route['expert/evaluate/school'] = 'ExpertAdmin/evaluate_school';
	$route['expert/evaluate/score'] = 'ExpertAdmin/evaluate_score';
	$route['expert/test'] = 'ExpertAdmin/test';
	
	
	// 校级管理员模块
	$route['school'] = 'SchoolAdmin/index';
	$route['school/info'] = 'SchoolAdmin/info';
	$route['school/info/update'] = 'SchoolAdmin/info_update';
	$route['school/system'] = 'SchoolAdmin/system';
	$route['school/system/search'] = 'SchoolAdmin/system_search';
	$route['school/evaluate'] = 'SchoolAdmin/evaluate';
	$route['school'] = 'SchoolAdmin/index';
	$route['school'] = 'SchoolAdmin/index';
	$route['school'] = 'SchoolAdmin/index';
	
	// 系统管理员模块
	$route['admin'] = 'SystemAdmin/index';
	$route['admin/info'] = 'SystemAdmin/info';
	$route['admin/info/update'] = 'SystemAdmin/info_update';
	$route['admin/university'] = 'SystemAdmin/university';
	$route['admin/university/add'] = 'SystemAdmin/university_add';
	$route['admin/university/del'] = 'SystemAdmin/university_del';
	$route['admin/university/update'] = 'SystemAdmin/university_update';
	$route['admin/university/search'] = 'SystemAdmin/university_search';
	$route['admin/user'] = 'SystemAdmin/user';
	$route['admin/user/del'] = 'SystemAdmin/user_del';
	$route['admin/user/search'] = 'SystemAdmin/user_search';
	$route['admin/system'] = 'SystemAdmin/system';
	$route['admin/system/del'] = 'SystemAdmin/system_del';
	$route['admin/system/search'] = 'SystemAdmin/system_search';
	$route['admin/evaluate'] = 'SystemAdmin/evaluate';
	$route['admin/evaluate/chart'] = 'SystemAdmin/analysis_chart';
