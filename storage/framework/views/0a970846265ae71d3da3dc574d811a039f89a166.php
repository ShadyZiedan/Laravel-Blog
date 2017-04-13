<?php $__env->startSection('title','Edit Post'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<?php echo Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT']); ?>

			
			<?php echo e(Form::label('title','Title:')); ?>

			<?php echo e(Form::text('title', null, ['class'=>'form-control input-lg'])); ?>

			
				
			<?php echo e(Form::label('body','Post Body:')); ?>

			<?php echo e(Form::textarea('body', null, ['class'=>'form-control'])); ?>

			<hr>
			
		</div>
		<div class="col-md-4 well">
			<p><strong>Created At: </strong><time datetime="<?php echo e($post->created_at); ?>"><?php echo e(date('j M, Y h:i a', strtotime($post->created_at))); ?></time></p>
			<p><strong>Last update: </strong><time datetime="<?php echo e($post->updated_at); ?>"><?php echo e(date('j M, Y h:i a', strtotime($post->updated_at))); ?></time></p>
			<div class="row">
				<div class="col-md-6">
					<?php echo e(Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block'))); ?>

				</div>
				<div class="col-md-6">
					<?php echo e(Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])); ?>

				</div>
			</div>
			<?php echo Form:: close(); ?>

		</div>
		
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>