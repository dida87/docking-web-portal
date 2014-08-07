<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protein_user'); ?>
		<?php echo $form->radioButton($model,'protein_user'); ?>
		<?php echo $form->error($model,'protein_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ligand_user'); ?>
		<?php echo $form->radioButton($model,'ligand_user'); ?>
		<?php echo $form->error($model,'ligand_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'docking_user'); ?>
		<?php echo $form->radioButton($model,'docking_user'); ?>
		<?php echo $form->error($model,'docking_user'); ?>
	</div>

	<div class="row buttons">
               <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('style'=>'font-size:14px;font-weight:bold;height:30px;')); ?>
               <?php echo CHtml::button('Back', array('onclick'=>'js:history.go(-1); returnFalse;','style'=>'font-size:14px;font-weight:bold;height:30px;'));
?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->