<?php $__env->startSection('title','All Posts'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-12">
			<h1 class="btn-h1">All Posts</h1>
			<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary btn-h1 pull-right">Create a new post</a>
		</div>
		
	</div>
	<hr>
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th><?php echo e($post->id); ?></th>
						<td><?php echo e($post->title); ?></td>
						<td><?php echo e(substr($post->body, 0, 50)); ?><?php echo e((strlen($post->body)>50? "...":"")); ?></td>
						<td><?php echo e($post->created_at); ?></td>
						<td>
							<a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-default btn-sm">View</a>
							<a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-default btn-sm">Edit</a>
						</td>
					</tr>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<div class="text-center">
			<?php echo $posts->links(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>