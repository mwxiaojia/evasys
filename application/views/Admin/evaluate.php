<div class="content-inner">
	<!-- Page Header-->
	<header class="page-header">
		<div class="container-fluid">
			<h2 class="no-margin-bottom">评价分析</h2>
		</div>
	</header>
	<!-- Breadcrumb-->
	<div class="breadcrumb-holder container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo site_url('/admin/info'); ?>">主页</a></li>
			<li class="breadcrumb-item active">评价分析</li>
		</ul>
	</div>
	<section class="forms">
		<div class="container">
			<div class="row">
				<!-- Form Elements -->
				<div class="col-lg-12">
					<div class="card">
						<div class="card-close">
							<div class="dropdown">
								<button type="button" id="closeCard5" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false"
										class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i>
								</button>
								<div aria-labelledby="closeCard5"
									 class="dropdown-menu dropdown-menu-right has-shadow"><a href="#"
																							 class="dropdown-item remove">
										<i class="fa fa-times"></i>Close</a></div>
							</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">评价分析</h3>
						</div>
						<div class="card-body text-center">
							<div class="line"></div>
							<form action="<?php echo site_url('/admin/evaluate') ?>" method="post"
								  class="form-group row">
								<label class="col-sm-3 offset-sm-1 form-control label-material border-0">请选择学校：</label>
								<div class="col-sm-6">
									<div class="row">
										<select name="university" class="form-control text-center">>
											<?php foreach ($university as $u): ?>
												<option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="line"></div>
								<div class="col-sm-12 text-center">
									<button type="submit" class="btn btn-primary">&nbsp;查&nbsp;看&nbsp;评&nbsp;价&nbsp;结&nbsp;果&nbsp;</button>
								</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
