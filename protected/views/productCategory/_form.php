<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<!--<?php $list=CHtml::listData(Product::model()->findAll(), 'id', 'name'); 
		echo 'Продукт &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
		echo CHtml::dropDownList('pid_ddl', $model, $list, array('empty' => 'Выберите продукт',
			'ajax' => array('type'=>'POST'
						        , 'url'=>CController::createUrl('productCategory/updatePid')
						        , 'update'=>'#pid_row'  
					)
			));
	?>
	<br />
	<?php $list=CHtml::listData(Category::model()->findAll(), 'id', 'name'); 
		echo 'Категория продукта ';
		echo CHtml::dropDownList('cid_ddl', $model, $list, array('empty' => 'Выберите категорию',
			'ajax' => array('type'=>'POST'
						        , 'url'=>CController::createUrl('productCategory/updateCid')
						        , 'update'=>'#cid_row'  
					)
			));
	?>-->

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div id="pid_row" class="row">
		<?php echo $form->labelEx($model,'pid'); ?>
		<?php $list=CHtml::listData(Product::model()->findAll(), 'id', 'name');
			echo $form->dropDownList($model,'pid',$list); ?>
		<!--<?php echo $form::textField($model,'pid'); ?>-->
		<!--<?php echo CHtml::textField('pid'); ?>-->
		<?php echo $form->error($model,'pid'); ?>
	</div>

	<div id="cid_row" class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<!--<?php echo CHtml::textField('cid'); ?>-->
		<?php $list=CHtml::listData(Category::model()->findAll(), 'id', 'name');
			echo $form->dropDownList($model,'cid',$list); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
