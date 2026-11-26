

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Students</h3>
    <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">Add Student</a>
</div>

<form method="GET" action="<?php echo e(route('students.index')); ?>" class="row g-2 mb-3">
    <div class="col-md-5">
        <input type="text" name="search" class="form-control" placeholder="Search by name"
               value="<?php echo e(request('search')); ?>">
    </div>
    <div class="col-md-4">
        <select name="course_id" class="form-select">
            <option value="">All Courses</option>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($course->id); ?>" <?php echo e(request('course_id') == $course->id ? 'selected' : ''); ?>>
                    <?php echo e($course->title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-md-3">
        <button class="btn btn-dark">Filter</button>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline-secondary">Reset</a>
    </div>
</form>

<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><?php echo e($student->course->title); ?></td>
                <td class="d-flex gap-1">
                    <a href="<?php echo e(route('students.edit', $student)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST"
                          onsubmit="return confirm('Delete this student?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="5" class="text-center">No students found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php echo e($students->links('pagination::bootstrap-5')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\assignment7\training-center\resources\views/students/index.blade.php ENDPATH**/ ?>