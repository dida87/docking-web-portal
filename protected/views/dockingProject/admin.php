<?php
/* @var $this DockingProjectController */
/* @var $model DockingProject */

$this->breadcrumbs=array(
	'Docking Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List DockingProject', 'url'=>array('index')),
	///array('label'=>'Create DockingProject', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#docking-project-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(// the dialog
    'id' => 'dialogClassroom',
    'options' => array(
        'title' => 'Docking Project',
        'autoOpen' => false,
        'modal' => true,
        'width' => 670,
        'height' => 700,
    ),
));
?>
<div class="divForForm"></div>
<?php $this->endWidget(); ?>
<h1><i>Docking Project</i></h1>

<br />                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
<?php echo CHtml::button('Advanced Search',array(
     'style'=> 'width: 140px; border-radius: 15px;height:30px;',
    'class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<br />
<br/>
<br/>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'docking-project-grid',
        'htmlOptions'=> array('style'=>'width:1000px;'),
        'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css'),
	//'cssFile'=>false,
	'cssFile' => Yii::app()->baseUrl . '/css/gridViewStyle/gridView.css',      
	'htmlOptions' => array('class' => 'grid-view rounded'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'project_id',
                array(
                    'header'=> 'Protein Name',
                    'name'=> 'protein_id', 
                    'value'=> '$data->protein->name',
                    //'filter'=> 'Protein::model()->getOption()',
                ),
                'map_id',
		'user_id',
                //'protein_id',
		'ligand_id',
		'project_name',
		array(
                    'header'=>'File DPF',
                    'name'=> 'file_dpf',
                    'value'=>'$data->dockingProject->file_dpf'
                ),
		//'waiting_job',
		/*
		'running_job',
		'completed_job',
		'failed_job',
		'protein_id',
		'ligand_id',
		*/
		     array(
            'header' => 'Operations',
            'class' => 'CButtonColumn',
            'template' => '{update} {delete} {view}',
            'buttons' => array
                (
                'update' => array(
                    //'visible'=> 'Yii::app()-user->ligand_login',
                    //'if(isset($data->user)){if($data->user->ligand_login){true;}false;}',
                    'visible'=> '(isset(Yii::app()->user->docking_user) && Yii::app()->user->docking_user)',
                    'click' => 'function(){updateClassroom(this); $("#dialogClassroom").dialog("open");return false;}',
                    
                ),
                'delete'=> array(
                    'visible'=> '(isset(Yii::app()->user->docking_user) && Yii::app()->user->docking_user)',
                ),
                 'update' => array(
                 //'label'=>'refresh',
                    'imageUrl'=>"../first_yii/assets/icon-archive/refresh-icon.png",
                    'click' => 'function(){refreshRow(this);return false;}',
                ),
            )
               
        )
	),
)); 
class MyClass {

    public static function myMethod($data, $row, $component) {
        //the $data is the ActiveRecord Model collection from the dataProvider
        //the $row is the data row
        //the $component is the CGridColumn object for each columns
        // return the result you want
        return $row + 1;
    }
}
?>
<br />
    <?php
if (isset(Yii::app()->user->docking_user)){
echo CHtml::button('Add project', // the link for open the dialog
        array(
    //'style' => 'cursor: pointer; text-decoration: underline;',
    //'visible'=>(isset(Yii::app()->user->ligand_login) && Yii::app()->user->ligand_login),      
    'style'=> 'width: 140px; border-radius: 15px;height:30px;',
    'onclick' => "{addClassroom(); $('#dialogClassroom').dialog('open');}"
));
}
?>


<script type="text/javascript" src="../first_yii/assets/js_uploadfile/ajaxfileupload.js"></script>
<script type="text/javascript">
    // ajax upload image to server
    function ajaxFileUpload()
    {
        // add code validate here...
        $fileUp = $('input[name=fileToUpload]').val();
        if($fileUp == '') return;

        $.ajaxFileUpload
        (
        {
            url:'protected/views/dockingProject/doajaxfileupload.php',
            secureuri:false,
            fileElementId:'fileToUpload',
            async: false,
            dataType: 'json',
            //data:{
            //    name:'logan', 
            //    id:'id'
            //},
            success: 
            function (data, status)
            {
                if(typeof(data.error) != 'undefined')
                {
                    if(data.error != '')
                    {
                        $("#unsuccessRepoft").show();
                    }
                    else
                    {
                        $('#DPF_file_name').val(data.msg);
                        $("#successRepoft").show();
                    }
                }
            }
            ,
            error: function (data, status, e)
            {
                $("#unsuccessRepoft").show();
            }
        }
    )

        return ;

    }
    
    // here is the magic
    function addClassroom()
    {
        $.ajax({
            url: 'index.php?r=dockingProject/create',
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(data){
                if (data.status == 'failure')
                {
                    $('#dialogClassroom div.divForForm').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#dialogClassroom div.divForForm form').submit(
                    addClassroom
                    );
                }
                else
                {
                    //$('#dialogClassroom div.divForForm').html(data.div);
                    $.fn.yiiGridView.update('docking-project-grid');
                    //setTimeout("$('#dialogClassroom').dialog('close')",3000);
                    
                    $('#diviewalogClassroom').dialog('close');
                    alert('insert success');
                }
            }
        });
        return false; 
    }
    function updateClassroom(control)
    {
        $.ajax({
            url: $(control).attr('href'),
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(data){
                if (data.status == 'failure')
                {
                    $('#dialogClassroom div.divForForm').html(data.div);
                    //Here is the trick: on submit-> once again this function!
                    $('#dialogClassroom div.divForForm form').submit(_updateClassroom);
                }
                else
                {
                    $('#dialogClassroom div.divForForm').html(data.div);
                    $.fn.yiiGridView.update('docking-project-grid');
                    setTimeout("$('#dialogClassroom').dialog('close')",3000);
                }
            }
        });
        return false; 
    }
    
    function _updateClassroom()
    {
        $.ajax({
            url: 'index.php?r=dockingProject/update&id=0',
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(data){
                if (data.status == 'failure')
                {
                    $('#dialogClassroom div.divForForm').html(data.div);
                    $('#dialogClassroom div.divForForm form').submit(_updateClassroom);
                    //Here is the trick: on submit-> once again this function!
                }
                else
                {
                    //$('#dialogClassroom div.divForForm').html(data.div);
                    $.fn.yiiGridView.update('docking-project-grid');
                    //setTimeout("$('#dialogClassroom').dialog('close')",3000);
                    
                    $('#dialogClassroom').dialog('close');
                    alert('update success');
                }
            }
        });
        return false;
        
    }
     function refreshRow(control)
    {
        var url = $(control).attr('href');
        var rowId = "";
        if(url != null && "" != url.trim())
        {
            rowId = url.substr(url.indexOf("id=")+3);
        }
        //alert(rowId);////////////////////////////////
        
        $.ajax({
            url: 'index.php?r=dockingProject/refresh&id=' + rowId,
            type: 'post',
//            dataType: 'json',
            data: rowId,
            success: function(data){
                if (data == 'success')
                {
                    $.fn.yiiGridView.update('docking-project-grid');
                }
                else
                {
                    alert('action failed');
                }
            }
        });
        
        return false; 
    }
    function dockingFileOnchange()
    {
        ajaxFileUpload();
        //$("#successRepoft").show();
    }
    
</script>
