<?php $this->set('title_for_layout', 'Order List'); ?>
	<?php $this->Html->addCrumb('Order List', '/orders/order_list'); ?>
					<h1>Order List</h1>
					</div>
				</div>
			</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2 class="pull-left">Order List</h2>

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
										<th class="text-center footable-visible footable-first-column footable-sortable"><a href="#"><span>Control No</span></a></th>
                    <th class="text-center"><span>Client</span></th>
										<th class="text-center"><span>Quality</span></th>
										<th class="text-center"><span>Mosaic Type</span></a></th>
										<th class="text-center"><span>Mosaic Size</span></a></th>
										<th class="text-center"><span>Length</span></a></th>
										<th class="text-center"><span>Point</span></a></th>
										<th class="text-center"><span>Maybe</span></a></th>
										<th class="text-center"><span>Work time</span></a></th>
										<th class="text-center"><span>Point/Hour</span></a></th>
										<th class="text-center"><span>Delivery date</span></a></th>
										<th class="text-center"><span>Note</span></a></th>
										<th class="text-center"><span>Status</span></a></th>
									</tr>

								</thead>
								<tbody>
									<?php foreach($orderList as $order) : ?>
									<tr>
										<td class="text-center"><?php echo $this->Html->link(
											$order['Order']['control_no'],
											array(
												'controller' => 'orders',
												'action' => 'detail/' . $order['Order']['id']
												)
											);?>
										</td>
                    <td class="text-center"><?php echo $order['Client']['client'];?> </td>
										<td class="text-center"><?php echo $order['Client']['quality'];?> </td>
										<td class="text-center"><?php echo $order['MosaicType']['mosaic_type'];?> </td>
										<td class="text-center"><?php echo $order['MosaicSize']['mosaic_size'];?> </td>
										<td class="text-center"><?php echo $order['Order']['length'];?> <?= __('min') ?></td>
										<td class="text-center"><?php echo $order['Order']['price'];?>  <?= __('P') ?></td>
										<td class="text-center"><?php if($order['MosaicType']['mosaic_type'] == 'normal') {echo ceil($order['Avg']['worktime']);}else{echo ceil($order['AvgCs']['worktime']) ;} ;?> <?= __('h') ?></td>
										<td class="text-center"><?php echo $order['Order']['worktime'];?> <?= __('h') ?></td>
										<td class="text-center">
											<?php
												if($order['Order']['worktime'] !=0){
													echo number_format($order['Order']['price'] / $order['Order']['worktime']);
												} else { echo "-" ;}
											?> <?= __('P/h') ?>
										</td>
										<td class="text-center"><?php echo $order['Order']['delivery_date'];?></td>
										<td><?php echo $order['Order']['note'];?></td>
										<td class="text-center">
											<?php
												echo $this->Btn->setStatusBtnOrderList($order['Order']['status_type_id']) .
													$order['StatusType']['status'];?></span>
										</td>
									</tr>
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