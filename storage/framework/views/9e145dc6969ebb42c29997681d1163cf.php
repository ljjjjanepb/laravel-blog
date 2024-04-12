<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<body>
    <!-- resources/views/posts/show.blade.php -->
    <body class="container">
    <h1><?php echo e($post->title); ?></h1>
<p><?php echo e($post->content); ?></p>
<a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-secondary">Edit</a>
<form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST"
style="display: inline-block">
 <?php echo csrf_field(); ?>
 <?php echo method_field('DELETE'); ?>
 <button type="submit" class="btn btn-danger" onclick="return
confirm('Are you sure?')">Delete</button>
</form>
<a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary">Back
to all posts</a>

</body>
</html><?php /**PATH C:\Users\User\Documents\laravel\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>