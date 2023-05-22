		<div class="content-inner">
			<!-- Page Header-->
			<header class="page-header">
				<div class="container-fluid">
					<h2 class="no-margin-bottom">专家评价</h2>
				</div>
			</header>
			<!-- Breadcrumb-->
			<div class="breadcrumb-holder container-fluid">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url('/expert/info'); ?>">主页</a></li>
					<li class="breadcrumb-item active">专家评价</li>
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
									<h3 class="h4">专家评价</h3>
								</div>
								<div class="card-body text-center">
									<div class="row">
										<div class="col-sm-8 offset-sm-2">
											<div class="bs-stepper-header">
												<div class="step">
													<span class="bs-stepper-circle">1</span>
													<span class="bs-stepper-label">选择体系</span>
												</div>
												<div class="bs-stepper-line"></div>
												<div class="step active">
													<span class="bs-stepper-circle">2</span>
													<span class="bs-stepper-label">选择学校</span>
												</div>
												<div class="bs-stepper-line"></div>
												<div class="step">
													
													<span class="bs-stepper-circle">3</span>
													<span class="bs-stepper-label">进行打分</span>
												</div>
											</div>
										</div>
									</div>
									<div class="line"></div>
									<form action="<?php echo site_url('/expert/evaluate/school') ?>" method="post" class="form-group row">
										<input type="hidden" name="system" value="<?= $system ?>">
										<label class="col-sm-4 form-control label-material border-0">请选择评价学校：</label>
										<div class="col-sm-7">
											<div class="row">
												<select name="university" class="form-control text-center">>
													<?php foreach ($university as $u): ?>
														<option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="col-sm-12 text-center">
											<button type="button" class="btn btn-primary" onclick="history.go(-1);">&nbsp;上&nbsp;&nbsp;一&nbsp;&nbsp;步&nbsp;</button>&emsp;&emsp;&emsp;
											<button type="submit" class="btn btn-primary">&nbsp;下&nbsp;&nbsp;一&nbsp;&nbsp;步&nbsp;</button>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
