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
					<section class="forms">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4 offset-lg-4">
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
											<h3 class="h4">基本信息</h3>
										</div>
										<div class="card-body text-center">
											<div class="form-group row">
												<label class="col-sm-4 form-control label-material border-0">用&nbsp;户&nbsp;名：</label>
												<div class="col-sm-8">
													<div class="row">
														<label>
															<input type="text" disabled
																   class="input-material text-center border-0"
																   value="<?php echo $userinfo['name']; ?>">
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label
													class="col-sm-4 form-control label-material border-0">用户邮箱：</label>
												<div class="col-sm-8">
													<div class="row">
														<label>
															<input type="text" disabled
																   class="input-material text-center border-0"
																   value="<?php echo $userinfo['email']; ?>">
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label
													class="col-sm-4 form-control label-material border-0">用户电话：</label>
												<div class="col-sm-8">
													<div class="row">
														<label>
															<input type="text" disabled
																   class="input-material text-center border-0"
																   value="<?php echo $userinfo['tel'] == '' ? 'None' : $userinfo['tel']; ?>">
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label
													class="col-sm-4 form-control label-material border-0">用户类型：</label>
												<div class="col-sm-8">
													<div class="row">
														<label>
															<input type="text" disabled
																   class="input-material text-center border-0"
																   value="<?php echo $userinfo['type']; ?>">
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label
													class="col-sm-4 form-control label-material border-0">用户备注：</label>
												<div class="col-sm-8">
													<div class="row">
														<label>
															<input type="text" disabled
																   class="input-material text-center border-0"
																   value="<?php echo $userinfo['remarks']; ?>">
														</label>
													</div>
												</div>
											</div>
											<button type="button" data-toggle="modal" data-target="#myModal"
													class="btn btn-primary">&nbsp;修&nbsp;&nbsp;改&nbsp;&nbsp;信&nbsp;&nbsp;息&nbsp;
											</button>
											<!-- Modal-->
											<div id="myModal" tabindex="-1" role="dialog"
												 aria-labelledby="exampleModalLabel" aria-hidden="true"
												 class="modal fade text-left">
												<div role="document" class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h4 id="exampleModalLabel" class="modal-title">
																修改信息</h4>
															<button type="button" data-dismiss="modal"
																	aria-label="Close" class="close"><span
																	aria-hidden="true">×</span></button>
														</div>
														<form class="text-center form-horizontal" method="post" action="<?php echo site_url('/admin/info/update'); ?>">
															<div class="modal-body">
																<input type="hidden" name="id"
																	   value="<?php echo $userinfo['id']; ?>">
																<div class="form-group row">
																	<label
																		class="col-sm-4 form-control label-material border-0">用&nbsp;户&nbsp;名：</label>
																	<div class="col-sm-7">
																		<div class="row">
																			<label>
																				<input type="text" name="name" required
																					   class="form-control text-center"
																					   value="<?php echo $userinfo['name']; ?>">
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
																				<input type="email" name="email" required
																					   class="form-control text-center"
																					   value="<?php echo $userinfo['email']; ?>">
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label
																		class="col-sm-4 form-control label-material border-0">用户密码：</label>
																	<div class="col-sm-7">
																		<div class="row">
																			<label>
																				<input type="password" name="pwd" required
																					   class="form-control text-center"
																					   value="<?php echo $userinfo['pwd']; ?>">
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label
																		class="col-sm-4 form-control label-material border-0">确认密码：</label>
																	<div class="col-sm-7">
																		<div class="row">
																			<label>
																				<input type="password" name="confirm_pwd" required
																					   class="form-control text-center"
																					   value="<?php echo $userinfo['pwd']; ?>">
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
																				<input type="tel" name="tel" required
																					   class="form-control text-center"
																					   value="<?php echo $userinfo['tel']; ?>">
																			</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label
																		class="col-sm-4 form-control label-material border-0">用户类型：</label>
																	<div class="col-sm-7">
																		<div class="row">
																			<select name="type"
																					class="form-control text-center">
																				<option
																					value="expert" <?php echo $userinfo['type'] == 'expert' ? 'selected' : ''; ?>>
																					评审专家
																				</option>
																				<option
																					value="school" <?php echo $userinfo['type'] == 'school' ? 'selected' : ''; ?>>
																					校级管理员
																				</option>
																				<option
																					value="admin" <?php echo $userinfo['type'] == 'admin' ? 'selected' : ''; ?>>
																					系统管理员
																				</option>
																			</select>
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
									</div>
								</div>
							</div>
						</div>
					</section>
