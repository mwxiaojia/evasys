		<div class="content-inner">
			<!-- Page Header-->
			<header class="page-header">
				<div class="container-fluid">
					<h2 class="no-margin-bottom">评价指标和评价信息</h2>
				</div>
			</header>
			<!-- Breadcrumb-->
			<div class="breadcrumb-holder container-fluid">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url('/school/info'); ?>">主页</a></li>
					<li class="breadcrumb-item active">评价指标和评价信息</li>
				</ul>
			</div>
			<section class="form">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-horizontal" method="post" action="<?php echo site_url('/school/system/search'); ?>">
								<div class="form-group row">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text">&nbsp;查&nbsp;找&nbsp;评&nbsp;价&nbsp;体&nbsp;系&nbsp;</span></div>
												<input type="text" name="name" required placeholder="请输入评价体系名称" class="form-control">
												<div class="input-group-append">
													<button type="submit" class="btn btn-primary">&emsp;查&emsp;&emsp;询&emsp;</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-12">
							<div class="card">
								<div class="card-close">
									<div class="dropdown">
										<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
										<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
									</div>
								</div>
								<div class="card-header d-flex align-items-center">
									<h3 class="h4">评价体系和评价指标表</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-center align-middle">
											<thead>
												<?php if (count($systems) == 0): ?>
													<tr><th>无评价体系和评价指标信息</th></tr>
												<?php else: ?>
													<tr>
														<th rowspan="2">序&emsp;&emsp;号</th>
														<th rowspan="2">体系名称</th>
														<th colspan="8">人才培养</th>
														<th colspan="5">教学资源</th>
														<th colspan="5">科学研究</th>
														<th colspan="5">社会声誉</th>
														<th rowspan="2">操&emsp;&emsp;作</th>
													</tr>
													<tr>
														<th>精品课程</th>
														<th>交叉学科</th>
														<th>自设学科</th>
														<th>国际交流</th>
														<th>拔尖创新人才</th>
														<th>复合应用人才</th>
														<th>硕博论文数量</th>
														<th>本科生就业率</th>
														<th>师资质量</th>
														<th>教授授课</th>
														<th>院士数量</th>
														<th>科研平台</th>
														<th>学术期刊</th>
														<th>涉农科技成果</th>
														<th>核心期刊论文</th>
														<th>新农科项目</th>
														<th>国家科技进步奖</th>
														<th>省部级奖励</th>
														<th>实践项目</th>
														<th>基金项目</th>
														<th>涉农专利</th>
														<th>国内声誉</th>
														<th>国际声誉</th>
													</tr>
												<?php endif; ?>
											</thead>
											<tbody>
												<?php foreach ($systems as $n => $s): ?>
													<tr>
														<th scope="row"><?= $n+1 ?></th>
														<td><?= $s['name'] ?></td>
														<td><?= $s['ps'] == -1 ? "None" : round($s['ps'], 4) ?></td>
														<td><?= $s['ind'] == -1 ? "None" : round($s['ind'], 4) ?></td>
														<td><?= $s['sed'] == -1 ? "None" : round($s['sed'], 4) ?></td>
														<td><?= $s['ie'] == -1 ? "None" : round($s['ie'], 4) ?></td>
														<td><?= $s['tit'] == -1 ? "None" : round($s['tit'], 4) ?></td>
														<td><?= $s['cat'] == -1 ? "None" : round($s['cat'], 4) ?></td>
														<td><?= $s['nmdt'] == -1 ? "None" : round($s['nmdt'], 4) ?></td>
														<td><?= $s['uer'] == -1 ? "None" : round($s['uer'], 4) ?></td>
														<td><?= $s['qs'] == -1 ? "None" : round($s['qs'], 4) ?></td>
														<td><?= $s['tp'] == -1 ? "None" : round($s['tp'], 4) ?></td>
														<td><?= $s['na'] == -1 ? "None" : round($s['na'], 4) ?></td>
														<td><?= $s['rp'] == -1 ? "None" : round($s['rp'], 4) ?></td>
														<td><?= $s['aj'] == -1 ? "None" : round($s['aj'], 4) ?></td>
														<td><?= $s['asta'] == -1 ? "None" : round($s['asta'], 4) ?></td>
														<td><?= $s['cjp'] == -1 ? "None" : round($s['cjp'], 4) ?></td>
														<td><?= $s['nasp'] == -1 ? "None" : round($s['nasp'], 4) ?></td>
														<td><?= $s['ssta'] == -1 ? "None" : round($s['ssta'], 4) ?></td>
														<td><?= $s['pmlr'] == -1 ? "None" : round($s['pmlr'], 4) ?></td>
														<td><?= $s['pp'] == -1 ? "None" : round($s['pp'], 4) ?></td>
														<td><?= $s['fp'] == -1 ? "None" : round($s['fp'], 4) ?></td>
														<td><?= $s['ap'] == -1 ? "None" : round($s['ap'], 4) ?></td>
														<td><?= $s['dr'] == -1 ? "None" : round($s['dr'], 4) ?></td>
														<td><?= $s['ir'] == -1 ? "None" : round($s['ir'], 4) ?></td>
														<td>
															<a href="" data-toggle="modal" data-target="#myModal<?= $s['id'] ?>" title="显示详情"><i class="fa fa-info"></i>&nbsp;详情</a>&nbsp;&nbsp;
															<div id="myModal<?= $s['id'] ?>" tabindex="-1" role="dialog"
																 aria-labelledby="exampleModalLabel" aria-hidden="true"
																 class="modal fade text-left">
																<div role="document" class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 id="exampleModalLabel" class="modal-title">
																				<?= $s['name'] ?></h4>
																			<button type="button" data-dismiss="modal"
																					aria-label="Close" class="close"><span
																					aria-hidden="true">×</span></button>
																		</div>
																		<div class="modal-body">
																			<div class="table-responsive">
																				<table class="table text-center align-middle">
																					<thead>
																						<tr>
																							<th>一级指标</th>
																							<th>二级指标</th>
																							<th>权&emsp;&emsp;重</th>
																						</tr>
																					</thead>
																					<tbody>
																						<?php if ($s['ps'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>精品课程</td>
																								<td><?= round($s['ps'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['ind'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>交叉学科</td>
																								<td><?= round($s['ind'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['sed'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>自设学科</td>
																								<td><?= round($s['sed'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['ie'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>国际交流</td>
																								<td><?= round($s['ie'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['tit'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>拔尖创新人才</td>
																								<td><?= round($s['tit'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['cat'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>复合应用人才</td>
																								<td><?= round($s['cat'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['nmdt'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>硕博论文数量</td>
																								<td><?= round($s['nmdt'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['uer'] != -1):?>
																							<tr>
																								<td>人才培养</td>
																								<td>本科生就业率</td>
																								<td><?= round($s['uer'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['qs'] != -1):?>
																							<tr>
																								<td>教学资源</td>
																								<td>师资质量</td>
																								<td><?= round($s['qs'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['tp'] != -1):?>
																							<tr>
																								<td>教学资源</td>
																								<td>教授授课</td>
																								<td><?= round($s['tp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['na'] != -1):?>
																							<tr>
																								<td>教学资源</td>
																								<td>院士数量</td>
																								<td><?= round($s['na'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['rp'] != -1):?>
																							<tr>
																								<td>教学资源</td>
																								<td>科研平台</td>
																								<td><?= round($s['rp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['aj'] != -1):?>
																							<tr>
																								<td>教学资源</td>
																								<td>学术期刊</td>
																								<td><?= round($s['aj'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['asta'] != -1):?>
																							<tr>
																								<td>科学研究</td>
																								<td>涉农科技成果</td>
																								<td><?= round($s['asta'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['cjp'] != -1):?>
																							<tr>
																								<td>科学研究</td>
																								<td>核心期刊论文</td>
																								<td><?= round($s['cjp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['nasp'] != -1):?>
																							<tr>
																								<td>科学研究</td>
																								<td>新农科项目</td>
																								<td><?= round($s['nasp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['ssta'] != -1):?>
																							<tr>
																								<td>科学研究</td>
																								<td>国家科技进步奖</td>
																								<td><?= round($s['ssta'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['pmlr'] != -1):?>
																							<tr>
																								<td>科学研究</td>
																								<td>省部级奖励</td>
																								<td><?= round($s['pmlr'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['pp'] != -1):?>
																							<tr>
																								<td>社会声誉</td>
																								<td>实践项目</td>
																								<td><?= round($s['pp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['fp'] != -1):?>
																							<tr>
																								<td>社会声誉</td>
																								<td>基金项目</td>
																								<td><?= round($s['fp'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['ap'] != -1):?>
																							<tr>
																								<td>社会声誉</td>
																								<td>涉农专利</td>
																								<td><?= round($s['ap'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['dr'] != -1):?>
																							<tr>
																								<td>社会声誉</td>
																								<td>国内声誉</td>
																								<td><?= round($s['dr'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																						<?php if ($s['ir'] != -1):?>
																							<tr>
																								<td>社会声誉</td>
																								<td>国际声誉</td>
																								<td><?= round($s['ir'], 4) ?></td>
																							</tr>
																						<?php endif; ?>
																					</tbody>
																				</table>
																			</div>
																			<div class="modal-footer">
																				<button type="submit" data-dismiss="modal" class="btn btn-primary">确认</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
