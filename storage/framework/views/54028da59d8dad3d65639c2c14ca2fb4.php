<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<body>
    <!-- resources/views/posts/create.blade.php -->
    <body class="container">
    <h1>Create Post</h1>
<?php if($errors->any()): ?>
 <div class="alert alert-danger">
 <ul>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($error); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>
 </div>
<?php endif; ?>
<form action="<?php echo e(route('posts.store')); ?>" method="POST">
 <?php echo csrf_field(); ?>
 <div class="form-group">
 <label for="title">Title</label>
 <input type="text" name="title" id="title" class="form-control" required>
 </div>
 <div class="form-group">
 <label for="content">Content</label>
 <textarea name="content" id="content" class="form-control"
rows="4" required></textarea>
 </div>
 <button type="submit" class="btn btn-primary">Create</button>
</form>
</body>
</html><?php /**PATH C:\Users\User\Documents\laravel\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>