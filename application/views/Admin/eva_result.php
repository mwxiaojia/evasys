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
			<li class="breadcrumb-item"><a href="<?php echo site_url('/school/info'); ?>">主页</a></li>
			<li class="breadcrumb-item active">评价分析</li>
		</ul>
	</div>
	<section class="charts">
		<div class="container-fluid">
			<div class="row">
				<!-- Line Charts-->
				<div class="col-lg-8 offset-lg-2">
					<div class="line-chart-example card">
						<div class="card-close">
							<div class="dropdown">
								<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
								<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
							</div>
						</div>
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">评价分析</h3>
						</div>
						<div class="card-body">
							<div id="box" style="padding: 0 50px;">
								<div class="row">
									<div class="col-sm-12" style="height: 30px;"></div>
									<div class="col-sm-12"><h3 class="text-center">【<?= $university ?>】评价结果</h3></div>
									<div class="col-sm-12" style="height: 30px;"></div>
								</div>
								<div class="row">
									<div class="col-sm-12"><h5>一、评价结果趋势</h5></div>
									<div class="col-sm-12" style="height: 30px;"></div>
								</div>
								<div class="row">
									<canvas id="lineChartExample"></canvas>
								</div>
								<div class="row">
									<div class="col-sm-12" style="height: 30px;"></div>
									<div class="col-sm-12"><h5>二、历次评价详情</h5></div>
								</div>
								<?php foreach ($eva_results as $num => $value):?>
									<div class="row">
										<div class="col-sm-12"><h6 class="text-center">第<?= $num ?>次评价结果为：<?= round($value['score'], 4) ?></h6></div>
										<div class="col-md-6">
											<h6 class="text-center">一级指标</h6>
											<canvas id="pieChartExample<?= $num ?>"></canvas>
										</div>
										<div class="col-md-6">
											<h6 class="text-center">二级指标</h6>
											<canvas id="radarChartExample<?= $num ?>"></canvas>
										</div>
										<div class="col-sm-12">
											<h6 class="text-center">具体结果：</h6>
											<div class="table-responsive">
												<table class="table text-center align-middle">
													<thead>
														<tr>
															<th>一级指标</th>
															<th>二级指标</th>
															<th>权&emsp;&emsp;重</th>
															<th>得&emsp;&emsp;分</th>
														</tr>
													</thead>
													<tbody>
														<?php if ($value['system']['ps'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>精品课程</td>
																<td><?= round($value['system']['ps'], 4) ?></td>
																<td><?= round($value['evaluate']['ps'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['ind'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>交叉学科</td>
																<td><?= round($value['system']['ind'], 4) ?></td>
																<td><?= round($value['evaluate']['ind'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['sed'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>自设学科</td>
																<td><?= round($value['system']['sed'], 4) ?></td>
																<td><?= round($value['evaluate']['sed'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['ie'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>国际交流</td>
																<td><?= round($value['system']['ie'], 4) ?></td>
																<td><?= round($value['evaluate']['ie'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['tit'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>拔尖创新人才</td>
																<td><?= round($value['system']['tit'], 4) ?></td>
																<td><?= round($value['evaluate']['tit'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['cat'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>复合应用人才</td>
																<td><?= round($value['system']['cat'], 4) ?></td>
																<td><?= round($value['evaluate']['cat'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['nmdt'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>硕博论文数量</td>
																<td><?= round($value['system']['nmdt'], 4) ?></td>
																<td><?= round($value['evaluate']['nmdt'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['uer'] != -1):?>
															<tr>
																<td>人才培养</td>
																<td>本科生就业率</td>
																<td><?= round($value['system']['uer'], 4) ?></td>
																<td><?= round($value['evaluate']['uer'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['qs'] != -1):?>
															<tr>
																<td>教学资源</td>
																<td>师资质量</td>
																<td><?= round($value['system']['qs'], 4) ?></td>
																<td><?= round($value['evaluate']['qs'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['tp'] != -1):?>
															<tr>
																<td>教学资源</td>
																<td>教授授课</td>
																<td><?= round($value['system']['tp'], 4) ?></td>
																<td><?= round($value['evaluate']['tp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['na'] != -1):?>
															<tr>
																<td>教学资源</td>
																<td>院士数量</td>
																<td><?= round($value['system']['na'], 4) ?></td>
																<td><?= round($value['evaluate']['na'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['rp'] != -1):?>
															<tr>
																<td>教学资源</td>
																<td>科研平台</td>
																<td><?= round($value['system']['rp'], 4) ?></td>
																<td><?= round($value['evaluate']['rp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['aj'] != -1):?>
															<tr>
																<td>教学资源</td>
																<td>学术期刊</td>
																<td><?= round($value['system']['aj'], 4) ?></td>
																<td><?= round($value['evaluate']['aj'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['asta'] != -1):?>
															<tr>
																<td>科学研究</td>
																<td>涉农科技成果</td>
																<td><?= round($value['system']['asta'], 4) ?></td>
																<td><?= round($value['evaluate']['asta'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['cjp'] != -1):?>
															<tr>
																<td>科学研究</td>
																<td>核心期刊论文</td>
																<td><?= round($value['system']['cjp'], 4) ?></td>
																<td><?= round($value['evaluate']['cjp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['nasp'] != -1):?>
															<tr>
																<td>科学研究</td>
																<td>新农科项目</td>
																<td><?= round($value['system']['nasp'], 4) ?></td>
																<td><?= round($value['evaluate']['nasp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['ssta'] != -1):?>
															<tr>
																<td>科学研究</td>
																<td>国家科技进步奖</td>
																<td><?= round($value['system']['ssta'], 4) ?></td>
																<td><?= round($value['evaluate']['ssta'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['pmlr'] != -1):?>
															<tr>
																<td>科学研究</td>
																<td>省部级奖励</td>
																<td><?= round($value['system']['pmlr'], 4) ?></td>
																<td><?= round($value['evaluate']['pmlr'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['pp'] != -1):?>
															<tr>
																<td>社会声誉</td>
																<td>实践项目</td>
																<td><?= round($value['system']['pp'], 4) ?></td>
																<td><?= round($value['evaluate']['pp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['fp'] != -1):?>
															<tr>
																<td>社会声誉</td>
																<td>基金项目</td>
																<td><?= round($value['system']['fp'], 4) ?></td>
																<td><?= round($value['evaluate']['fp'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['ap'] != -1):?>
															<tr>
																<td>社会声誉</td>
																<td>涉农专利</td>
																<td><?= round($value['system']['ap'], 4) ?></td>
																<td><?= round($value['evaluate']['ap'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['dr'] != -1):?>
															<tr>
																<td>社会声誉</td>
																<td>国内声誉</td>
																<td><?= round($value['system']['dr'], 4) ?></td>
																<td><?= round($value['evaluate']['dr'], 4) ?></td>
															</tr>
														<?php endif; ?>
														<?php if ($value['system']['ir'] != -1):?>
															<tr>
																<td>社会声誉</td>
																<td>国际声誉</td>
																<td><?= round($value['system']['ir'], 4) ?></td>
																<td><?= round($value['evaluate']['ir'], 4) ?></td>
															</tr>
														<?php endif; ?>
													</tbody>
												</table>
											</div>
										</div>
										<script>
											/*global $, document*/
											$(document).ready(function () {
												// ------------------------------------------------------- //
												// Pie Chart
												// ------------------------------------------------------ //
												var PIECHARTEXMPLE = $('#pieChartExample<?= $num ?>');
												var pieChartExample = new Chart(PIECHARTEXMPLE, {
													type: 'pie',
													data: {
														labels: <?php echo json_encode(array_keys($value['findicators'])); ?>,
														datasets: [
															{
																data: <?php echo json_encode(array_values($value['findicators'])); ?>,
																borderWidth: 0,
																backgroundColor: [
																	'#44b2d7',
																	"#59c2e6",
																	"#71d1f2",
																	"#96e5ff"
																]
															}]
													}
												});

												// ------------------------------------------------------- //
												// Radar Chart
												// ------------------------------------------------------ //
												var RADARCHARTEXMPLE = $('#radarChartExample<?= $num ?>');
												var radarChartExample = new Chart(RADARCHARTEXMPLE, {
													type: 'radar',
													data: {
														labels: <?php echo json_encode(array_keys($value['sindicators'])); ?>,
														datasets: [
															{
																label: "指标评分",
																backgroundColor: "rgba(255, 119, 119, 0.4)",
																borderWidth: 2,
																borderColor: "rgba(255, 119, 119, 1)",
																pointBackgroundColor: "rgba(255, 119, 119, 1)",
																pointBorderColor: "#fff",
																pointHoverBackgroundColor: "#fff",
																pointHoverBorderColor: "rgba(255, 119, 119, 1)",
																data: <?php echo json_encode(array_values($value['sindicators'])); ?>
															}
														]
													}
												});
											});
										</script>
									</div>
								<?php endforeach;?>
							</div>
							<div class="line"></div>
							<div class="row">
								<div class="col-md-12 text-center">
									<button type="button" class="btn btn-primary" onclick="printPDF()">&emsp;保&nbsp;存&nbsp;成&nbsp;PDF&emsp;</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo base_url('/public/js/jspdf.umd.min.js'); ?>"></script>
	<script src="<?php echo base_url('/public/js/html2canvas.js'); ?>"></script>
	<script>
		var target = document.querySelector('#box');
		function printPDF() {
			html2canvas(target).then((canvas)=>{
				const pageData = canvas.toDataURL('image/jpeg', 1.0);

				const doc = new jspdf.jsPDF({
					orientation: 'p', // 纵向  默认
					unit: 'pt', // 单位用pt
					format: 'a4',
				});


				const a4_width = 595.28; // a4纸的宽度 单位pt
				const a4_height = 841.89; //  a4纸的高度 单位pt
				const contentWidth = canvas.width; // 图片实际宽度
				const contentHeight = canvas.height; // 图片实际高度

				const pageHeight = (contentWidth / a4_width) * a4_height; // 图片的实际宽度是可能大于a4纸的，在这里计算出a4纸一页上能放的实际图片的尺寸， 根据a4纸的宽高比例计算

				let remainedHeight = contentHeight;

				const imgHeight = (a4_width / contentWidth) * contentHeight; // 图片缩放到a4宽度的情况下的图片长度

				remainedHeight -= pageHeight;

				let position = 0;

				doc.addImage(pageData, 'JPEG', 0, position, a4_width, imgHeight); // 截取第一幅图到pdf第一页
				while (remainedHeight >= 0) { // 如果还有图片没有放到pdf，继续增加pdf放置图片剩余内容；
					position = position + a4_height;
					doc.addPage();
					// 可以把 position 看成 background-position； 都是负值来表示向上/向左偏移
					doc.addImage(pageData, 'JPEG', 0, -position, a4_width, imgHeight);
					remainedHeight -= pageHeight;
				}

				doc.save('评价结果_' + new Date().getTime() + '.pdf');
			})
		}
	</script>
	<script>
		$(document).ready(function () {
			var ctx1 = $("canvas").get(0).getContext("2d");
			ctx1.canvas.height = 90;
			var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
			gradient1.addColorStop(0, 'rgba(133, 180, 242, 0.91)');
			gradient1.addColorStop(1, 'rgba(255, 119, 119, 0.94)');


			// ------------------------------------------------------- //
			// Line Chart
			// ------------------------------------------------------ //
			var LINECHARTEXMPLE   = $('#lineChartExample');
			var lineChartExample = new Chart(LINECHARTEXMPLE, {
				type: 'line',
				options: {
					legend: {labels:{fontColor:"#777", fontSize: 12}},
					scales: {
						xAxes: [{
							display: true,
							gridLines: {
								color: '#eee'
							}
						}],
						yAxes: [{
							display: true,
							gridLines: {
								color: '#eee'
							}
						}]
					},
				},
				data: {
					labels: <?php echo json_encode(array_keys($trend)); ?>,
					datasets: [
						{
							label: "评价分数",
							fill: true,
							lineTension: 0.3,
							backgroundColor: gradient1,
							borderColor: gradient1,
							borderCapStyle: 'butt',
							borderDash: [],
							borderDashOffset: 0.0,
							borderJoinStyle: 'miter',
							borderWidth: 1,
							pointBorderColor: gradient1,
							pointBackgroundColor: "#fff",
							pointBorderWidth: 1,
							pointHoverRadius: 5,
							pointHoverBackgroundColor: gradient1,
							pointHoverBorderColor: "rgba(220,220,220,1)",
							pointHoverBorderWidth: 2,
							pointRadius: 1,
							pointHitRadius: 10,
							data: <?php echo json_encode(array_values($trend)); ?>,
							spanGaps: false
						}
					]
				}
			});
			
		});
	</script>
