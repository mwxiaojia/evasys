<ul class="list-unstyled">
	<li class="<?php echo $active == 'info' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/info'); ?>"> <i class="icon-home"></i>基本信息 </a></li>
	<li class="<?php echo $active == 'system' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/system'); ?>"> <i class="icon-padnote"></i>选择评价体系和指标 </a></li>
	<li class="<?php echo $active == 'aim' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/aim'); ?>"> <i class="icon-grid"></i>评价体系和指标信息 </a></li>
	<li class="<?php echo $active == 'analysis' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/analysis'); ?>"> <i class="icon-grid"></i>评价分析 </a></li>
	<li class="<?php echo $active == 'evaluate' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/evaluate'); ?>"> <i class="fa fa-bar-chart icon-screen"></i>专家评价 </a></li>
	<li><a href="<?php echo site_url('/logout'); ?>"> <i class="icon-interface-windows"></i>退出登录</a></li>
</ul>
</nav>
<div class="content-inner">
	<!-- Page Header-->
	<header class="page-header">
		<div class="container-fluid">
			<h2 class="no-margin-bottom">基本信息</h2>
		</div>
	</header>
	<!-- Breadcrumb-->
	<div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo site_url('/'); ?>">主页</a></li>
			<li class="breadcrumb-item active">基本信息</li>
		</ul>
	</div>
