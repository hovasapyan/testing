<?php
/* @var $this UserController */
/* @var $model User */



$this->menu=array(
	array('label'=>'Журнал пользователя', 'url'=>array('index')),
	array('label'=>'Изменения пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'created',
		'ban',
		'role',
	),
)); ?>
