<nav class="side-navbar">
	<!-- Sidebar Header-->
	<div class="sidebar-header d-flex align-items-center">
		<div class="avatar"><img src="<?php echo base_url($userinfo['image']); ?>" alt="..."
								 class="img-fluid rounded-circle"></div>
		<div class="title">
			<h1 class="h4"><?php echo $userinfo['name']; ?></h1>
			<p><?php echo $userinfo['remarks']; ?></p>
		</div>
	</div>
	<ul class="list-unstyled">
		<li class="<?php echo $active == 'info' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/info'); ?>"> <i class="icon-home"></i>基本信息 </a></li>
		<li class="<?php echo $active == 'system' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/system'); ?>"> <i class="icon-padnote"></i>评价体系和评价指标 </a></li>
		<li class="<?php echo $active == 'evaluate' ? 'active': ''; ?>"><a href="<?php echo site_url('/expert/evaluate'); ?>"> <i class="fa fa-bar-chart icon-screen"></i>专家评价 </a></li>
		<li><a href="<?php echo site_url('/logout'); ?>"> <i class="icon-interface-windows"></i>退出登录</a></li>
	</ul>
</nav>
