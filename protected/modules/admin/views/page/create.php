﻿<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Журнал страниц', 'url'=>array('index')),
);
?>

<h1>Создать страницу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>