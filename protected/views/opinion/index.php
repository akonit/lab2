<?php
/* @var $this OpinionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Opinions',
);

$this->menu=array(
	array('label'=>'Создать отзыв', 'url'=>array('create')),
	array('label'=>'Администрирование отзывов', 'url'=>array('admin')),
);
?>

<h1>Отзывы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
