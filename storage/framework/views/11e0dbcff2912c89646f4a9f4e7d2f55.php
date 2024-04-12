<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<body>

    <!-- resources/views/posts/index.blade.php -->
<div class="container">
    <h1>All Posts</h1>
<?php if(session('success')): ?>
 <div class="alert alert-success">
 <?php echo e(session('success')); ?>

 </div>
<?php endif; ?>

<table class="table">
 <thead>
 <tr>
 <th>Title</th>
 <th>Content</th>
 <th>Actions</th>
 </tr>
 </thead>
 <tbody>
 <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e($post->title); ?></td>
 <td><?php echo e($post->content); ?></td>
 <td>
 <a href="<?php echo e(route('posts.show', $post)); ?>"
class="btn btn-primary">View</a>
 <a href="<?php echo e(route('posts.edit', $post)); ?>"
class="btn btn-secondary">Edit</a>
 <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" style="display: inline-block">
 <?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
 </form>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </tbody>
</table>
<?php echo e($posts->links()); ?>


</body>
</html><?php /**PATH C:\Users\User\Documents\laravel\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>