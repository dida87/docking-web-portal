<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('protein_user')); ?>:</b>
	<?php echo CHtml::encode($data->protein_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ligand_user')); ?>:</b>
	<?php echo CHtml::encode($data->ligand_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('docking_user')); ?>:</b>
	<?php echo CHtml::encode($data->docking_user); ?>
	<br />


</div>