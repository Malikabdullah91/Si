

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">View Karyawan</h1>
    <div class="card">
        <div class="card-header">
            <strong>ID:</strong> <?php echo e($penerimaanKaryawan->id); ?>

        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?php echo e($penerimaanKaryawan->Nama); ?></p>
            <p><strong>Tanggal Lamar:</strong> <?php echo e($penerimaanKaryawan->TanggalLamar); ?></p>
            <p><strong>Tanggal Penerimaan:</strong> <?php echo e($penerimaanKaryawan->TanggalPenerimaan); ?></p>
            <p><strong>Jabatan:</strong> <?php echo e($penerimaanKaryawan->Jabatan); ?></p>
            <p><strong>Gaji:</strong> <?php echo e($penerimaanKaryawan->Gaji); ?></p>
            <p><strong>Departemen:</strong> <?php echo e($penerimaanKaryawan->Departemen); ?></p>
            <p><strong>Lokasi Kerja:</strong> <?php echo e($penerimaanKaryawan->LokasiKerja); ?></p>
            <a href="<?php echo e(route('penerimaan_karyawans.index')); ?>" class="btn btn-secondary">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SI\resources\views/penerimaan_karyawans/show.blade.php ENDPATH**/ ?>