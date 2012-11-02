<?php
/* @var $this UserController */
/* @var $model User */



$this->menu=array(
	array('label'=>'Журнал User', 'url'=>array('index')),
	array('label'=>'Создать User', 'url'=>array('create')),
	array('label'=>'Просмотр User', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Изменения пользователя<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>