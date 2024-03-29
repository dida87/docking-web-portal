<?php
/* @var $this DockingProjectController */
/* @var $model DockingProject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docking-project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'map_id'); ?>
		<?php echo $form->textField($model,'map_id'); ?>
		<?php echo $form->error($model,'map_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_dpf'); ?>
		<?php echo $form->textField($model,'file_dpf',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'file_dpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waiting_job'); ?>
		<?php echo $form->textField($model,'waiting_job'); ?>
		<?php echo $form->error($model,'waiting_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'running_job'); ?>
		<?php echo $form->textField($model,'running_job'); ?>
		<?php echo $form->error($model,'running_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completed_job'); ?>
		<?php echo $form->textField($model,'completed_job'); ?>
		<?php echo $form->error($model,'completed_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'failed_job'); ?>
		<?php echo $form->textField($model,'failed_job'); ?>
		<?php echo $form->error($model,'failed_job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protein_id'); ?>
		<?php echo $form->textField($model,'protein_id'); ?>
		<?php echo $form->error($model,'protein_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ligand_id'); ?>
		<?php echo $form->textField($model,'ligand_id'); ?>
		<?php echo $form->error($model,'ligand_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->