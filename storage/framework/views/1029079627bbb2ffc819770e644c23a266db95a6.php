<?php $__env->startSection('title','Home'); ?>

 <?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to our Blog</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, sit quasi dolorem nesciunt consectetur quis molestiae voluptatem in similique, ipsa cumque aliquid officiis fugiat quidem neque ullam optio adipisci quibusdam?</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8"> <!-- posts -->
        
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="post">
            <h2><?php echo e($post->title); ?></h2>
            <p><?php echo e(substr($post->body, 0, 300)); ?><?php echo e($post->body > 300 ? "...":""); ?></p>

            <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary">Read More</a>
        </div>
        <hr>   

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="text-center">
            <?php echo $posts->links(); ?>

        </div> 
    </div>
    
    <div class="col-md-3 col-md-offset-1"> <!-- sidebar -->
        <div class="widget">
            <h2>Categories</h2>
            <ul>
                <li>Technology & Science</li>
                <li>Engineering</li>
                <li>Philosophy</li>
                <li>Languages</li>
                <li>Sport</li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>