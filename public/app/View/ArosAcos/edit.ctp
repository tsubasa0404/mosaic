<!-- <div class="arosAcos form">
<?php // echo $this->Form->create('ArosAco'); ?>
	<fieldset>
		<legend><?php // echo __('Edit Aros Aco'); ?></legend>
	<?php
		// echo $this->Form->input('id');
		// echo $this->Form->input('aro_id');
		// echo $this->Form->input('aco_id');
		// echo $this->Form->input('_create');
		// echo $this->Form->input('_read');
		// echo $this->Form->input('_update');
		// echo $this->Form->input('_delete');
	?>
	</fieldset>
<?php // echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArosAco.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ArosAco.id'))); ?></li>
		<li><?php // echo $this->Html->link(__('List Aros Acos'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Aros'), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Aro'), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Acos'), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->

<div class="arosAcos form">
<?php echo $this->Form->create('ArosAco',array('action'=>'../users/acl_edit')); ?>
 <fieldset>
 <legend><?php echo __("Acl編集(ID:".$this->request->data['ArosAco']['id'].")"); ?></legend>
 <?php
 echo $this->Form->hidden('id');
 echo $this->Form->hidden('aro_id',array('value'=>$this->request->data['ArosAco']['aro_id']));
 echo $this->Form->hidden('aco_id',array('value'=>$this->request->data['Aco']['alias']));
 echo $this->Form->radio('create',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'作成','value'=>$this->request->data['ArosAco']['_create']==1 ? 'allow' : 'deny'));
 echo $this->Form->radio('read',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'読み込み','value'=>$this->request->data['ArosAco']['_read']==1 ? 'allow' : 'deny'));
 echo $this->Form->radio('update',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'更新','value'=>$this->request->data['ArosAco']['_update']==1 ? 'allow' : 'deny'));
 echo $this->Form->radio('delete',array(
 'allow'=>'許可','deny'=>'禁止'),
 array('legend'=>'削除','value'=>$this->request->data['ArosAco']['_delete']==1 ? 'allow' : 'deny'));
 ?>
 </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
 <h3><?php echo __('Actions'); ?></h3>
 <ul>
<li><?php echo $this->Html->link(__('リストAcl'), array('action' => 'index')); ?></li>
 <li><?php echo $this->Html->link(__('リストuserRoles'), array('controller' => 'userRoles', 'action' => 'index')); ?> </li>
 <li><?php echo $this->Html->link(__('リストUsers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
 </ul>
</div>