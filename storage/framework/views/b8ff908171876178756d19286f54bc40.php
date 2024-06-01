

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Edit Karyawan</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('penerimaan_karyawans.update', $penerimaanKaryawan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" class="form-control" value="<?php echo e($penerimaanKaryawan->Nama); ?>">
        </div>
        <div class="form-group">
            <label for="TanggalLamar">Tanggal Lamar:</label>
            <input type="date" id="TanggalLamar" name="TanggalLamar" class="form-control" value="<?php echo e($penerimaanKaryawan->TanggalLamar); ?>">
        </div>
        <div class="form-group">
            <label for="TanggalPenerimaan">Tanggal Penerimaan:</label>
            <input type="date" id="TanggalPenerimaan" name="TanggalPenerimaan" class="form-control" value="<?php echo e($penerimaanKaryawan->TanggalPenerimaan); ?>">
        </div>
        <div class="form-group">
            <label for="Jabatan">Jabatan:</label>
            <input type="text" id="Jabatan" name="Jabatan" class="form-control" value="<?php echo e($penerimaanKaryawan->Jabatan); ?>">
        </div>
        <div class="form-group">
            <label for="Gaji">Gaji:</label>
            <input type="number" id="Gaji" name="Gaji" step="0.01" class="form-control" value="<?php echo e($penerimaanKaryawan->Gaji); ?>">
        </div>
        <div class="form-group">
            <label for="Departemen">Departemen:</label>
            <input type="text" id="Departemen" name="Departemen" class="form-control" value="<?php echo e($penerimaanKaryawan->Departemen); ?>">
        </div>
        <div class="form-group">
            <label for="LokasiKerja">Lokasi Kerja:</label>
            <input type="text" id="LokasiKerja" name="LokasiKerja" class="form-control" value="<?php echo e($penerimaanKaryawan->LokasiKerja); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SI\resources\views/penerimaan_karyawans/edit.blade.php ENDPATH**/ ?>