

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Penerimaan Karyawan</h1>
    <a href="<?php echo e(route('penerimaan_karyawans.create')); ?>" class="btn btn-primary mb-3">Create New Karyawan</a>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lamar</th>
                <th>Tanggal Penerimaan</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Departemen</th>
                <th>Lokasi Kerja</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $karyawans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($karyawan->id); ?></td>
                <td><?php echo e($karyawan->Nama); ?></td>
                <td><?php echo e($karyawan->TanggalLamar); ?></td>
                <td><?php echo e($karyawan->TanggalPenerimaan); ?></td>
                <td><?php echo e($karyawan->Jabatan); ?></td>
                <td><?php echo e($karyawan->Gaji); ?></td>
                <td><?php echo e($karyawan->Departemen); ?></td>
                <td><?php echo e($karyawan->LokasiKerja); ?></td>
                <td>
                    <a href="<?php echo e(route('penerimaan_karyawans.show', $karyawan->id)); ?>" class="btn btn-info btn-sm">View</a>
                    <a href="<?php echo e(route('penerimaan_karyawans.edit', $karyawan->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('penerimaan_karyawans.destroy', $karyawan->id)); ?>" method="POST" style="display:inline-block;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SI\resources\views/penerimaan_karyawans/index.blade.php ENDPATH**/ ?>