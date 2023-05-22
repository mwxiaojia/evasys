		<div class="content-inner">
			<!-- Page Header-->
			<header class="page-header">
				<div class="container-fluid">
					<h2 class="no-margin-bottom">学校信息</h2>
				</div>
			</header>
			<!-- Breadcrumb-->
			<div class="breadcrumb-holder container-fluid">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url('/admin/info'); ?>">主页</a></li>
					<li class="breadcrumb-item active">学校信息</li>
				</ul>
			</div>
			<section class="form">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-horizontal" method="post" action="<?php echo site_url('/admin/university/search'); ?>">
								<div class="form-group row">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text">&nbsp;查&nbsp;找&nbsp;学&nbsp;校&nbsp;</span></div>
												<input type="text" name="name" required placeholder="请输入学校名称" class="form-control">
												<div class="input-group-append">
													<button type="submit" class="btn btn-primary">&emsp;查&emsp;&emsp;询&emsp;</button>
													<span>&emsp;</span>
													<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">&nbsp;添&nbsp;加&nbsp;学&nbsp;校&nbsp;</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- Modal-->
							<div id="myModal" tabindex="-1" role="dialog"
								 aria-labelledby="exampleModalLabel" aria-hidden="true"
								 class="modal fade text-left">
								<div role="document" class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 id="exampleModalLabel" class="modal-title">
												添加学校</h4>
											<button type="button" data-dismiss="modal"
													aria-label="Close" class="close"><span
													aria-hidden="true">×</span></button>
										</div>
										<form class="text-center form-horizontal" method="post" action="<?php echo site_url('/admin/university/add'); ?>">
											<div class="modal-body">
												<div class="form-group row">
													<label
														class="col-sm-4 form-control label-material border-0">学校名称：</label>
													<div class="col-sm-7">
														<div class="row">
															<label>
																<input type="text" name="name" placeholder="请输入学校名称" required
																	   class="form-control text-center">
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label
														class="col-sm-4 form-control label-material border-0">学校电话：</label>
													<div class="col-sm-7">
														<div class="row">
															<label>
																<input type="tel" name="tel" placeholder="请输入学校电话" required
																	   class="form-control text-center">
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label
														class="col-sm-4 form-control label-material border-0">学校网址：</label>
													<div class="col-sm-7">
														<div class="row">
															<label>
																<input type="text" name="website" placeholder="请输入学校网址" required
																	   class="form-control text-center">
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label
														class="col-sm-4 form-control label-material border-0">学校地址：</label>
													<div class="col-sm-7">
														<div class="row">
															<label>
																<input type="text" name="addr" placeholder="请输入学校地址" required
																	   class="form-control text-center">
															</label>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label
														class="col-sm-4 form-control label-material border-0">备注信息：</label>
													<div class="col-sm-7">
														<div class="row">
															<label>
																<input type="text" name="remarks" placeholder="请输入备注信息"
																	   class="form-control text-center">
															</label>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="reset" data-dismiss="modal"
															class="btn btn-secondary">取消
													</button>
													<button type="submit" class="btn btn-primary">
														确认
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
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
									<h3 class="h4">学校信息表</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-center">
											<thead>
												<?php if (count($university) == 0): ?>
													<tr><th>无学校信息</th></tr>
												<?php else: ?>
													<tr>
														<th>序&emsp;&emsp;号</th>
														<th>学校名称</th>
														<th>学校电话</th>
														<th>学校网址</th>
														<th>学校地址</th>
														<th>备注信息</th>
														<th>操&emsp;&emsp;作</th>
													</tr>
												<?php endif; ?>
											</thead>
											<tbody>
												<?php foreach ($university as $n => $u): ?>
													<tr>
														<th scope="row"><?= $n+1 ?></th>
														<td><?= $u['name'] ?></td>
														<td><?= $u['tel'] ?></td>
														<td><?= $u['addr'] ?></td>
														<td><?= $u['website'] ?></td>
														<td><?= $u['remarks'] ?></td>
														<td>
															<a href="" data-toggle="modal" data-target="#myModal<?= $u['id'] ?>" title="修改"><i class="fa fa-edit"></i>&nbsp;修改</a>&nbsp;&nbsp;
															<a onclick='if(window.confirm("确认要删除吗？")){window.location.href = "<?php echo site_url('admin/university/del?id=') . $u['id']; ?>";}' title="删除"><i class="fa fa-trash-o"></i>&nbsp;删除</a>
															<div id="myModal<?= $u['id'] ?>" tabindex="-1" role="dialog"
																 aria-labelledby="exampleModalLabel" aria-hidden="true"
																 class="modal fade text-left">
																<div role="document" class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 id="exampleModalLabel" class="modal-title">
																				添加学校</h4>
																			<button type="button" data-dismiss="modal"
																					aria-label="Close" class="close"><span
																					aria-hidden="true">×</span></button>
																		</div>
																		<form class="text-center form-horizontal" method="post" action="<?php echo site_url('/admin/university/update'); ?>">
																			<div class="modal-body">
																				<input type="hidden" name="id" value="<?= $u['id'] ?>">
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">学校名称：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="name" placeholder="请输入学校名称" value="<?= $u['name'] ?>" required
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">学校电话：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="tel" name="tel" placeholder="请输入学校电话" value="<?= $u['tel'] ?>" required
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">学校网址：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="website" placeholder="请输入学校网址" value="<?= $u['website'] ?>" required
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">学校地址：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="addr" placeholder="请输入学校地址" value="<?= $u['addr'] ?>" required
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">备注信息：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="remarks" placeholder="请输入备注信息" value="<?= $u['remarks'] ?>"
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="reset" data-dismiss="modal"
																							class="btn btn-secondary">取消
																					</button>
																					<button type="submit" class="btn btn-primary">
																						确认
																					</button>
																				</div>
																			</div>
																		</form>
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
