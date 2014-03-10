<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mark')); ?>:</b>
	<?php echo CHtml::encode($data->mark); ?>
	<br />

	<b>
        <?php 
		$text_ct = "Категории продукта:  ";
		$product_categories = $data->productCategories;
		foreach($product_categories as $pct)
		{
			$ct = Category::model()->findByPk($pct->cid);
			$text_ct = $text_ct . $ct->name . ", ";
		}
		echo CHtml::encode(substr($text_ct, 0, strlen($text_ct) - 2));
		//echo CHtml::encode($data->getAttributeLabel('voters')); 
	?></b>
	<br />
	<br />
</div>
