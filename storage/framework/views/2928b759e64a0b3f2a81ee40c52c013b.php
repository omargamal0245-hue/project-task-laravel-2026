

<?php $__env->startSection('content'); ?>
<h3 class="mb-4">Dashboard</h3>

<div class="row">
    <div class="col-md-6">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Courses</h5>
                <p class="display-4"><?php echo e($coursesCount); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Students</h5>
                <p class="display-4"><?php echo e($studentsCount); ?></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment7\training-center\resources\views/dashboard.blade.php ENDPATH**/ ?>