<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

$this->menu=array(
	//array('label'=>'Создать продукт', 'url'=>array('create')),
	array('label'=>'Администрирование продуктов', 'url'=>array('admin')),
);
?>

<h1>Продукты</h1>


<!--<form method="get">
<input type="search" placeholder="введите описание продукта" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<input type="submit" value="поиск" />
</form>-->

<?php echo CHtml::form(Yii::app()->createUrl('product/index'),'get') ?>
            <?php echo CHtml::textField('q', 'введите описание продукта') ?>
            <?php echo CHtml::submitButton(); ?>
        <?php echo CHtml::endForm() ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
