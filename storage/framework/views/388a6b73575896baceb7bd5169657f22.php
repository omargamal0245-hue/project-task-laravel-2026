

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Courses</h3>
    <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">Add Course</a>
</div>

<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Duration (hours)</th>
            <th>Students</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($course->title); ?></td>
                <td><?php echo e($course->price); ?></td>
                <td><?php echo e($course->duration); ?></td>
                <td><?php echo e($course->students_count); ?></td>
                <td class="d-flex gap-1">
                    <a href="<?php echo e(route('courses.show', $course)); ?>" class="btn btn-sm btn-info">View</a>
                    <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('courses.destroy', $course)); ?>" method="POST"
                          onsubmit="return confirm('Delete this course?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="5" class="text-center">No courses yet.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment7\training-center\resources\views/courses/index.blade.php ENDPATH**/ ?>