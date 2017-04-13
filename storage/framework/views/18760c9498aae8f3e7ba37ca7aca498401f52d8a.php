<?php $__env->startSection('title', 'View Post'); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="row">
		<div class="col-md-8">
			<h2><?php echo e($post->title); ?></h2>
			<hr>
			<p class="lead"><?php echo e($post->body); ?></p>
			<hr>
		</div>
		<div class="col-md-4 well">
			<p><strong>Created At: </strong><time datetime="<?php echo e($post->created_at); ?>"><?php echo e(date('j M, Y h:i a', strtotime($post->created_at))); ?></time></p>
			<p><strong>Last update: </strong><time datetime="<?php echo e($post->updated_at); ?>"><?php echo e(date('j M, Y h:i a', strtotime($post->updated_at))); ?></time></p>
			<div class="row">
				<div class="col-md-6">
					<?php echo e(Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block'))); ?>

				</div>
				<div class="col-md-6">
					<?php echo Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']); ?>

					<?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])); ?>

					<?php echo Form::close(); ?>

				</div>
			</div>
			
		</div>
		</div>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>