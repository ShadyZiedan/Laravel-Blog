<?php $__env->startSection('title','New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>
	<?php echo Html::style('css/parsley.css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create a new post</h1>
		<hr>
		<?php echo Form::open(['route' => 'posts.store', 'id' => 'form']); ?>


			<?php echo e(Form::label('title','Title:')); ?>

			<?php echo e(Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' =>'255'])); ?>

			<?php echo e(Form::label('body','Post:')); ?>

			<?php echo e(Form::textarea('body', null, ['class' => 'form-control', 'required' => ''])); ?>

			<?php echo e(Form::submit('Post',['class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px'])); ?>

		<?php echo Form::close(); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo Html::script('js/parsley.min.js'); ?>

	<script>
		$('#form').parsley();
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>