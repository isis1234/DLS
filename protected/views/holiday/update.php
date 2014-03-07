<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->Date=>array('view','id'=>$model->Date),
	'Update',
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('index')),
	array('label'=>'Create Holiday', 'url'=>array('create')),
	array('label'=>'View Holiday', 'url'=>array('view', 'id'=>$model->Date)),
	array('label'=>'Manage Holiday', 'url'=>array('admin')),
);
?>

<h1>Update Holiday <?php echo $model->Date; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>