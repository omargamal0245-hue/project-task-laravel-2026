

<?php $__env->startSection('content'); ?>
<h3>Add Course</h3>

<form action="<?php echo e(route('courses.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"><?php echo e(old('description')); ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Duration (hours)</label>
        <input type="number" name="duration" class="form-control" value="<?php echo e(old('duration')); ?>">
    </div>
    <button class="btn btn-success">Save</button>
    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">Back</a>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment7\training-center\resources\views/courses/create.blade.php ENDPATH**/ ?>