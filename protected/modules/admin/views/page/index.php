﻿<?php
/* @var $this PageController */
/* @var $model Page */



$this->menu=array(
	array('label'=>'Создание страницы', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('page-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал страниц</h1>



<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'created'=>array(
                    'name'=>'created',
                    'value'=>'date("j.m.Y H:i",$data->created)',
                    'filter'=>false 
                ),
		'status'=>array(
                    'name'=>'status',
                    'value'=>'($data->status==1)?"Доступно":"Скрыто"',
                    'filter'=>array(0=>'Скрыто',1=>'Доступно'),
                ),
		'category_id'=>array(
                   'name'=>'category_id',
                    'value'=>'$data->category->title',
                    'filter'=>Category::all() ,
                    
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
