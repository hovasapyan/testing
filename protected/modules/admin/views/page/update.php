<?php
/* @var $this CategoryController */
/* @var $model Category */


$this->menu=array(
	array('label'=>'Журнал страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Просмотр страниц', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Обновление страницы <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>