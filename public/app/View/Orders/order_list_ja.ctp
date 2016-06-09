<?php $this->set('title_for_layout', 'オーダー一覧'); ?>
	<?php $this->Html->addCrumb('Order List', '/orders/order_list'); ?>
					<h1>オーダー一覧</h1>
					</div>
				</div>
			</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2 class="pull-left">オーダー一覧</h2>

						<div class="filter-block pull-right">
							<div class="form-group pull-left">
								<input id="filter" type="text" class="form-control" placeholder="Search...">
								<i class="fa fa-search search-icon"></i>
							</div>
						</div>
					</header>

					<div class="main-box-body clearfix">
						<div class="table-responsive">
							<table class="table footable toggle-circle-filled table-striped table-bordered" data-page-size="50" data-filter="#filter" data-filter-text-only="true">
								<thead>
									<tr>
										<th class="text-center footable-visible footable-first-column footable-sortable"><a href="#"><span>管理番号</span></a></th>
										<th class="text-center"><span>会社名</span></th>
										<th class="text-center"><span>タイプ</span></a></th>
										<th class="text-center"><span>サイズ</span></a></th>
										<th class="text-center"><span>尺</span></a></th>
										<th class="text-center"><span>受注金額</span></a></th>
										<th class="text-center"><span>目標時間</span></a></th>
										<th class="text-center"><span>作業時間</span></a></th>
										<th class="text-center"><span>時間あたり売上</span></a></th>
										<th class="text-center"><span>納期</span></a></th>
										<th class="text-center"><span>備考</span></a></th>
										<th class="text-center"><span>状況</span></a></th>
									</tr>

								</thead>
								<tbody>
									<?php foreach($orderList as $order) : ?>
									<?php
										echo "<tr>";
										echo '<td class="text-center">' . $this->Html->link(
											$order['Order']['control_no'],
											array(
												'controller' => 'orders',
												'action' => 'detail/' . $order['Order']['id']
												)
											);
										echo "</td>";
										echo '<td class="text-center">' . $order['Client']['client'] . "</td>";
										echo '<td class="text-center">' . $order['MosaicType']['mosaic_type'] . "</td>";
										echo '<td class="text-center">' . $order['MosaicSize']['mosaic_size'] . "</td>";
										echo '<td class="text-center">' . $order['Order']['length'] . " min</td>";
										echo '<td class="text-center">' . $order['Order']['price'] . " 円</td>";
										echo '<td class="text-center">' . $order['Order']['target_time'] . " 時間</td>";
										echo '<td class="text-center">' . $order['Order']['worktime']. " 時間</td>";
										echo '<td class="text-center">';
											if($order['Order']['worktime'] !=0){
												echo number_format($order['Order']['price'] / $order['Order']['worktime']);
											} else { echo "-" ;}
										echo " 円/時</td>";
										echo '<td class="text-center">' . $order['Order']['delivery_date'] . "</td>";
										echo '<td>' . $order['Order']['note'] . "</td>";
										echo '<td class="text-center">' . $this->Btn->setStatusBtnOrderList($order['Order']['status_type_id']) .
													$order['StatusType']['status'] . "</span></td></tr>";
									?>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
						<ul class="pagination pull-right">
							<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	<?php
		echo $this->Html->script('moment.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.paginate',array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'page-js'));
	?>
	<!-- this page specific scripts -->

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		$(document).ready(function() {
			$('.footable').footable();
		});
	<?php $this->Html->scriptEnd(); ?>

</body>
</html>