<?php $this->set('title_for_layout', 'Finance'); ?>
<?php $this->Html->addCrumb(__('Finance')); ?>
					<h1><?= __('Finance Management') ?></h1>
					</div>
				</div>
			</div>
			<div class="row">

<?php echo $this->Session->flash() ?>
				<!-- expense list -->
				<div class="col-lg-12 col-md-12 col-sm-12 maxW800">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2><?php echo "Expenses [" . $dateArray[0] . '/' . $dateArray[1] . "]" ?></h2>
						</header>

						<!-- Month search box -->
						<div class="main-box-body clearfix ">
							<div class="dataTables_length maxW350">
								<?php echo $this->Form->create('Expense', array(
								'type' => 'get',
								'action' => 'index',
								'class' => 'form-inline change_month_form',
								'inputDefaults' => array(
									'div' => 'form-group',
									'class' => 'form-control'
								))); ?>
									<?php echo $this->Form->input('year', array(
										'label' => array('class' => 'sr-only'),
										'type' => 'number',
										'min' => '2014',
										'value' => $dateArray[0],
										'style' => 'width: 100px;'
									)) ?>
									<?php echo $this->Form->input('month', array(
										'label' => array('class' => 'sr-only'),
										'type' => 'number',
										'min' => '1',
										'max' => '12',
										'value' => $dateArray[1]
									)) ?>
									<button type="button" class="btn btn-primary change_month_btn"><i class="fa fa-search"></i> search</button>
								<?php echo $this->Form->end(); ?>
							</div>
							<div class="filter-block pull-right">
								<div class="form-group pull-left">
									<input type="text" id="filter" class="form-control" placeholder="Search...">
									<i class="fa fa-search search-icon"></i>
								</div>
							</div>
						</div>
						<!-- /Month search box -->
						<div class="main-box-body clearfix">
							<div class="expenses index">
								<h3><?php echo __('Expenses'); ?></h3>
								<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered footable" data-filter="#filter" data-page-size="100" >
									<thead>
										<tr>
											<th>date</th>
											<th>project</th>
											<th>item</th>
											<th>$/&yen;</th>
											<th>price</th>
											<th>budget</th>
											<th>note</th>
											<th class="actions"></th>
										</tr>
									</thead>
									<tbody class="expense">
										<?php foreach ($expenses as $expense): ?>
											<tr>
												<td class="td_first text-center"><?php echo h(date('m/d', strtotime($expense['Expense']['date']))); ?>&nbsp;</td>
												<td class="text-center">
													<?php echo $expense['Project']['project']; ?>
												</td>
												<td class="text-center">
													<?php echo $expense['ExpenseItem']['item']; ?>
												</td>
												<td class="text-center">
													<?php echo $expense['Currency']['currency']; ?>
												</td>
												<td class="text-center">
													<?php echo h($expense['Expense']['price']); ?>&nbsp;
												</td>
												<td class="text-center">
													<?php echo $expense['BudgetType']['type']; ?>
												</td>
												<td>
													<?php echo h($expense['Expense']['note']); ?>&nbsp;
												</td>
												<td class="actions text-center">
													<?php echo $this->Html->link('<i class="fa fa-pencil"></i>', array('action' => 'edit', $expense['Expense']['id']),array('class' => 'table-link','escape' => false)); ?>
													<?php echo $this->Form->postLink('<i class="fa fa-trash-o"></i>', array('action' => 'delete', $expense['Expense']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expense['Expense']['id']),'class' => 'table-link red','escape' => false)); ?>
												</td>
											</tr>
										<?php endforeach; ?>
										<tr class="hide tmp_add_expense">
											<td class="td_first text-center"></td>
											<td class="text-center">
											</td>
											<td class="text-center">
											</td>
											<td class="text-center">
											</td>
											<td class="text-center">
											</td>
											<td class="text-center">
											</td>
											<td>
											</td>
											<td class="actions text-center">
											</td>
										</tr>
									</tbody>
								</table>
								<ul class="pagination  hide-if-no-paging"></ul>
							</div>
							<div class="actions">
								<h3><?php echo __('Actions'); ?></h3>
								<ul>
									<li><?php echo $this->Html->link(__('New Expense'), array('action' => 'add')); ?></li>
									<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
									<li><?php echo $this->Html->link(__('List Expense Items'), array('controller' => 'expense_items', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link(__('New Expense Item'), array('controller' => 'expense_items', 'action' => 'add')); ?> </li>
									<li><?php echo $this->Html->link(__('List Expense Types'), array('controller' => 'expense_types', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link(__('New Expense Type'), array('controller' => 'expense_types', 'action' => 'add')); ?> </li>
									<li><?php echo $this->Html->link(__('List Budget Types'), array('controller' => 'budget_types', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link(__('New Budget Type'), array('controller' => 'budget_types', 'action' => 'add')); ?> </li>
									<li><?php echo $this->Html->link(__('List Currencies'), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
									<li><?php echo $this->Html->link(__('New Currency'), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
								</ul>
							</div>

						</div>
					</div>
				</div> <!-- /expense list -->

				<!-- expense data -->
				<div class="col-lg-12 col-md-12 col-sm-12 maxW250">
					<div class="main-box">

						<div class="main-box-body clearfix">
							<div class="expenses index">
								<h3><?php echo __('Budget Expenses'); ?></h3>
								<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered footable" data-page-size="100" >
									<thead>
										<tr>
											<th>item</th>
											<th>price</th>
										</tr>
									</thead>
									<tbody class="budget_table budget_calc_table">
										<?php foreach ($budget_expense_sum as $sum) : ?>
											<tr>
												<td class="td_first">
													<?php echo $sum['ExpenseItem']['item']; ?>
												</td>
												<td class="price"><?php echo round($sum[0]['sum'],2) ?></td>
											</tr>
										<?php endforeach; ?>
										<tr>
											<td class="td_first">
												Sum
											</td>
											<td class="budget_sum sum"></td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>

					<div class="main-box">
						<div class="main-box-body clearfix">
							<div class="expenses index">
								<h3><?php echo __('Personal Expenses'); ?></h3>
								<table cellpadding="0" cellspacing="0" class="table table-hover table-striped table-bordered footable" data-page-size="100" >
									<thead>
										<tr>
											<th>item</th>
											<th>price</th>
										</tr>
									</thead>
									<tbody class="personal_table  personal_calc_table">
										<?php foreach ($personal_expense_sum as $sum) : ?>
											<tr>
												<td class="td_first">
													<?php echo $sum['ExpenseItem']['item']; ?>
												</td>
												<td class="price"><?php echo round($sum[0]['sum'],2) ?></td>
											</tr>
										<?php endforeach; ?>
										<tr>
											<td class="td_first">
												Sum
											</td>
											<td class="personal_sum sum"></td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div> <!-- /expense data -->

				<!-- add expense form -->
				<div class="col-lg-12 col-md-12 col-sm-12 maxW220">
					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Expense'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<?php echo $this->Form->create('Expense', array(
								'action' => 'add',
								'class' => 'add_expense_form',
								'inputDefaults' => array('class' => 'form-control')
							)) ?>
							<fieldset>
								<legend><?php echo __('Add Expense'); ?></legend>
								<div class="form-group"><label for="ExpenseDate">Date</label>
									<?php echo $this->Form->date('date', array('value' => date('Y-m-d'), 'class' => 'form-control', 'type' => 'date'));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('project_id', array(
										'type' => 'select',
										'options' => $option_projects,
										'value' => 2
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('expense_item_id', array(
										'type' => 'select',
										'options' => $option_expense_items,
										'class' => 'sel2'
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('expense_type_id', array(
										'type' => 'select',
										'options' => $option_expense_types,
										'class' => 'sel2'
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('price');?></div>
								<div class="form-group">
									<?php echo $this->Form->input('budget_type_id', array(
										'type' => 'select',
										'options' => $option_budget_types,
										'value' => 1
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('currency_id', array(
										'type' => 'select',
										'options' => $option_currencies,
										'value' => 1
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('note');?>
								</div>

							</fieldset>
							<button type="button" class="add_expense_btn"><?= __('Submit') ?></button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>

					<div class="main-box">
						<header class="main-box-header clearfix">
							<h2>
								<?php echo __('Income'); ?>
							</h2>
						</header>
						<div class="main-box-body clearfix">
							<?php echo $this->Form->create('Income', array(
								'action' => 'add',
								'class' => 'add_income_form',
								'inputDefaults' => array('class' => 'form-control')
							)) ?>
							<fieldset>
								<legend><?php echo __('Add Income'); ?></legend>
								<div class="form-group"><label for="IncomeDate">Date</label>
									<?php echo $this->Form->date('date', array('value' => date('Y-m-d'), 'class' => 'form-control', 'type' => 'date'));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('project_id', array(
										'type' => 'select',
										'options' => $option_projects,
										'value' => 2
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('income_item_id', array(
										'type' => 'select',
										'options' => $option_income_items,
										'class' => 'sel2'
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('price');?></div>
								<div class="form-group">
									<?php echo $this->Form->input('budget_type_id', array(
										'type' => 'select',
										'options' => $option_budget_types,
										'value' => 1
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('currency_id', array(
										'type' => 'select',
										'options' => $option_currencies,
										'value' => 1
										));?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('payer_id', array(
										'type' => 'select',
										'options' => $option_payers
									)) ?>
								</div>
								<div class="form-group">
									<?php echo $this->Form->input('note');?>
								</div>

							</fieldset>
							<button type="button" class="add_income_btn"><?= __('Submit') ?></button>
							<?php echo $this->Form->end(); ?>
						</div>
					</div>
				</div> <!-- /add income form -->



			</div>
	<?php
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.sort', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('myjs/my_ajax', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		//初期設定
		$(function(){
			$(document).ready(function() {
				$('.alert').fadeOut(5000);
				$('.sel2').select2({});
				$('.footable').footable();
			});
		});

		//月の切り替え
		$(function(){
			$('.change_month_btn').on('click', function(){
				var url = $('.change_month_form').attr('action');
				var year = $('#ExpenseYear').val();
				var month = $('#ExpenseMonth').val();
				new_url = url+"/index/"+year+"/"+month;
				window.location.href = new_url;
			});
		});

		//集計
		$(function(){
			var price = 0;
			var personal_price = 0;
			$('.budget_table .price').each(function(){
				price += parseInt($(this).text());
			});
			$('.budget_sum').text(price);

			$('.personal_table .price').each(function(){
				personal_price += parseInt($(this).text());
			});
			$('.personal_sum').text(personal_price);
		});


	<?php $this->Html->scriptEnd(); ?>