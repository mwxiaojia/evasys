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
									<div class="form-group row">
										<div class="col-sm-8 offset-sm-2">
											<div class="bs-stepper-header">
												<div class="step">
													<span class="bs-stepper-circle">1</span>
													<span class="bs-stepper-label">选择体系</span>
												</div>
												<div class="bs-stepper-line"></div>
												<div class="step">
													<span class="bs-stepper-circle">2</span>
													<span class="bs-stepper-label">选择学校</span>
												</div>
												<div class="bs-stepper-line"></div>
												<div class="step active">
													
													<span class="bs-stepper-circle">3</span>
													<span class="bs-stepper-label">进行打分</span>
												</div>
											</div>
										</div>
									</div>
									<div class="line"></div>
									<form action="<?php echo site_url('/expert/evaluate/score') ?>" method="post" class="text-center form-horizontal">
										<div class="col-sm-8 offset-sm-2">
											<input type="hidden" name="system" value="<?= $system ?>">
											<input type="hidden" name="university" value="<?= $university ?>">
											<?php if ($systems['ps'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">精品课程：</label>
													<input type="number" max="100" min="0" name="ps" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['ind'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">交叉学科：</label>
													<input type="number" max="100" min="0" name="ind" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['sed'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">自设学科：</label>
													<input type="number" max="100" min="0" name="sed" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['ie'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">国际交流：</label>
													<input type="number" max="100" min="0" name="ie" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['tit'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">拔尖创新人才：</label>
													<input type="number" max="100" min="0" name="tit" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['cat'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">复合应用人才：</label>
													<input type="number" max="100" min="0" name="cat" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['nmdt'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">硕博论文数量：</label>
													<input type="number" max="100" min="0" name="nmdt" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['uer'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">本科生就业率：</label>
													<input type="number" max="100" min="0" name="uer" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['qs'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">师资质量：</label>
													<input type="number" max="100" min="0" name="qs" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['tp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">教授授课：</label>
													<input type="number" max="100" min="0" name="tp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['na'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">院士数量：</label>
													<input type="number" max="100" min="0" name="na" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['rp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">科研平台：</label>
													<input type="number" max="100" min="0" name="rp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['aj'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">学术期刊：</label>
													<input type="number" max="100" min="0" name="aj" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['asta'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">涉农科技成果：</label>
													<input type="number" max="100" min="0" name="asta" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['cjp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">核心期刊论文：</label>
													<input type="number" max="100" min="0" name="cjp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['nasp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">新农科项目：</label>
													<input type="number" max="100" min="0" name="nasp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['ssta'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">国家科技进步奖：</label>
													<input type="number" max="100" min="0" name="ssta" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['pmlr'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">省部级奖励：</label>
													<input type="number" max="100" min="0" name="pmlr" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['pp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">实践项目：</label>
													<input type="number" max="100" min="0" name="pp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['fp'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">基金项目：</label>
													<input type="number" max="100" min="0" name="fp" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['ap'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">涉农专利：</label>
													<input type="number" max="100" min="0" name="ap" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['dr'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">国内声誉：</label>
													<input type="number" max="100" min="0" name="dr" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
											<?php if ($systems['ir'] != -1):?>
												<div class="form-group row">
													<label class="col-sm-4 form-control label-material border-0">国际声誉：</label>
													<input type="number" max="100" min="0" name="ir" required class="form-control text-center col-sm-7" placeholder="请按照评分手册输入分数最大值100,最小值0">
												</div>
											<?php endif; ?>
										</div>
										<div class="col-sm-12 text-center">
											<button type="button" class="btn btn-primary" onclick="history.go(-1);">&nbsp;上&nbsp;&nbsp;一&nbsp;&nbsp;步&nbsp;</button>&emsp;&emsp;&emsp;
											<button type="submit" class="btn btn-primary">&nbsp;完&nbsp;&nbsp;&emsp;&nbsp;&nbsp;成&nbsp;</button>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
