<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->firstName.' '.$data->lastName), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentId')); ?>:</b>
	<?php echo CHtml::encode($data->department->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('leaveDate')); ?>:</b>
	<?php echo CHtml::encode($data->leaveDate); ?>
	<br />

	*/ ?>

</div>
