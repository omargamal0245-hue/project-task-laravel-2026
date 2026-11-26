

<?php $__env->startSection('content'); ?>
<h3><?php echo e($course->title); ?></h3>
<p><?php echo e($course->description); ?></p>
<p><strong>Price:</strong> <?php echo e($course->price); ?> | <strong>Duration:</strong> <?php echo e($course->duration); ?> hours</p>

<h5>Registered Students</h5>
<ul class="list-group mb-3">
    <?php $__empty_1 = true; $__currentLoopData = $course->students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="list-group-item"><?php echo e($student->name); ?> - <?php echo e($student->email); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li class="list-group-item">No students registered.</li>
    <?php endif; ?>
</ul>

<a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment7\training-center\resources\views/courses/show.blade.php ENDPATH**/ ?>