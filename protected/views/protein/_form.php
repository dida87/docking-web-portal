<?php
/* @var $this ProteinController */
/* @var $model Protein */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'protein-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
        <br />
	<div class="row">
		<?php echo $form->labelEx($model,'file_name'); ?>
		<?php echo $form->textField($model,'file_name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'file_name'); ?>
	</div>

           <div class="row">
                <input id="fileToUpload" type="file" name="fileToUpload" size="40" onchange="proteinFileOnchange()" style="" />
                <div id="successRepoft" style="float: left; display: none;">
                    <img src="../first_yii/assets/icon-archive/success-icon.png" >
                </div>
                <div id="unsuccessRepoft" style="float: left; display: none;">
                    <img src="../first_yii/assets/icon-archive/unsuccess-icon.png" >
                </div>
        </div>
        <br/>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('style'=>'width: 140px; border-radius: 15px;height:30px;')); ?>
                <?php echo CHtml::resetButton('Reset', array('style'=>'width: 140px; border-radius: 15px;height:30px;')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->