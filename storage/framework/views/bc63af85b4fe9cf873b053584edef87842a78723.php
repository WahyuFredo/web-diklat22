
<style type="text/css">
    .tanda {background-color: #cfcfcf;}
</style>
<table class="table table-striped" border="1">
    <thead>
        <tr class="tanda">
            <th>id</th>
            <th>luas</th>
            <th>nama</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perumahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($perumahan->id); ?></td>
            <td><?php echo e($perumahan->luas_perumahan); ?></td>
            <td><?php echo e($perumahan->nama_perumahan); ?></td>
            <td><?php echo e($perumahan->harga_perumahan); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\diklat22\resources\views/index.blade.php ENDPATH**/ ?>