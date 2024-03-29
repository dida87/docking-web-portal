<?php
/* @var $this DockingProjectController */
/* @var $model DockingProject */

$this->breadcrumbs=array(
	'Docking Projects'=>array('index'),
	$model->project_id,
);

$this->menu=array(
	array('label'=>'List DockingProject', 'url'=>array('index')),
	array('label'=>'Create DockingProject', 'url'=>array('create')),
	array('label'=>'Update DockingProject', 'url'=>array('update', 'id'=>$model->project_id)),
	array('label'=>'Delete DockingProject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->project_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DockingProject', 'url'=>array('admin')),
);
?>

<h1>View DockingProject #<?php echo $model->project_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'project_id',
		'map_id',
		'user_id',
		'project_name',
		'file_dpf',
		'waiting_job',
		'running_job',
		'completed_job',
		'failed_job',
		'protein_id',
		'ligand_id',
	),
)); ?>
