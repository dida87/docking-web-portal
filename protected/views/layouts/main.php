<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



<div class="container" id="page">

	<div id="header">
		<div id="logo">
                    <span id="banner" style="color: #CA0EE3; font: italic 40px 'Lucida Grande';">
                        <?php echo CHtml::encode(Yii::app()->name); ?>
                    </span>
                </div>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                //array('label'=>'List Ligand', 'url'=>array('/ligand/admin')),
				array('label'=>'Ligand', 'url'=>array('/ligand/admin')),
                                //'visible'=>(isset(Yii::app()->user->ligand_login) && Yii::app()->user->ligand_login)),
                                array('label'=>'Protein', 'url'=>array('/protein/admin')),
                                //'visible'=>(isset(Yii::app()->user->protein_login) && Yii::app()->user->protein_login)),
                                array('label'=>'Map Parameters', 'url'=>array('/map/admin')),
                                //'visible'=>(isset(Yii::app()->user->protein_login) && Yii::app()->user->protein_login)),
                                array('label'=>'Docking', 'url'=>array('/dockingProject/admin')),
                                //'visible'=>(isset(Yii::app()->user->docking_login) && Yii::app()->user->docking_login)), 
                                //array('label'=>'Register', 'url'=>array('/user'))
                                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
