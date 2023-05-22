		<div class="content-inner">
			<!-- Page Header-->
			<header class="page-header">
				<div class="container-fluid">
					<h2 class="no-margin-bottom">用户信息</h2>
				</div>
			</header>
			<!-- Breadcrumb-->
			<div class="breadcrumb-holder container-fluid">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url('/admin/info'); ?>">主页</a></li>
					<li class="breadcrumb-item active">用户信息</li>
				</ul>
			</div>
			<section class="form">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-horizontal" method="post" action="<?php echo site_url('/admin/user/search'); ?>">
								<div class="form-group row">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text">&nbsp;查&nbsp;找&nbsp;用&nbsp;户&nbsp;</span></div>
												<input type="text" name="name" required placeholder="请输入用户名" class="form-control">
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
									<h3 class="h4">用户信息表</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table text-center">
											<thead>
												<?php if (count($users) == 0): ?>
													<tr><th>无用户信息</th></tr>
												<?php else: ?>
													<tr>
														<th>序&emsp;&emsp;号</th>
														<th>用&nbsp;户&nbsp;名</th>
														<th>用户类型</th>
														<th>用户电话</th>
														<th>用户邮箱</th>
														<th>用户备注</th>
														<th>所属学校</th>
														<th>操&emsp;&emsp;作</th>
													</tr>
												<?php endif; ?>
											</thead>
											<tbody>
												<?php foreach ($users as $n => $u): ?>
													<tr>
														<th scope="row"><?= $n+1 ?></th>
														<td><?= $u['name'] ?></td>
														<td><?= $u['type'] ?></td>
														<td><?= $u['tel'] ?></td>
														<td><?= $u['email'] ?></td>
														<td><?= $u['remarks'] ?></td>
														<td>
															<?php
																$universityName = '';
																foreach ($university as $uu) {
																	if ($uu['id'] == $u['university']) {
																		$universityName =  $uu['name'];
																	}
																}
															
															?>
															<?= $universityName ?>
														</td>
														<td>
															<a href="" data-toggle="modal" data-target="#myModal<?= $u['id'] ?>" title="显示详情"><i class="fa fa-info"></i>&nbsp;详情</a>&nbsp;&nbsp;
															<a onclick='if(window.confirm("确认要删除吗？")){window.location.href = "<?php echo site_url('admin/user/del?id=') . $u['id']; ?>";}' title="删除"><i class="fa fa-trash-o"></i>&nbsp;删除</a>
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
																		<form class="text-center form-horizontal">
																			<div class="modal-body">
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">用&nbsp;户&nbsp;名：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="name" value="<?= $u['name'] ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">用户类型：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="type" value="<?= $u['type'] ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">用户电话：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="tel" value="<?= $u['tel'] ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">用户邮箱：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="email" value="<?= $u['email'] ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">用户备注：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="remarks" value="<?= $u['remarks'] ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="form-group row">
																					<label
																						class="col-sm-4 form-control label-material border-0">所属学校：</label>
																					<div class="col-sm-7">
																						<div class="row">
																							<label>
																								<input type="text" name="university" value="<?= $universityName ?>" disabled
																									   class="form-control text-center">
																							</label>
																						</div>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<button type="submit" data-dismiss="modal" class="btn btn-primary">确认</button>
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
