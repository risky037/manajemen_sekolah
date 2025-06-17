 

<?php $__env->startSection('content'); ?>
<div class="container" style="max-width: 900px; margin: 20px auto; font-family: Arial, sans-serif;">
    <h2 style="font-size: 28px; font-weight: bold; color: #333; margin-bottom: 20px;">📋 Data Siswa</h2>

    <a href="<?php echo e(route('siswa.create')); ?>"
       style="display: inline-block; margin-bottom: 20px; padding: 10px 16px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
       ➕ Tambah Siswa
    </a>

    <?php if(session('success')): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 10px 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 4px;">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table style="width: 100%; border-collapse: collapse; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
        <thead>
            <tr style="background-color: #f8f9fa; text-align: left;">
                <th style="padding: 12px; border-bottom: 2px solid #dee2e6;">👤 Nama</th>
                <th style="padding: 12px; border-bottom: 2px solid #dee2e6;">🏫 Kelas</th>
                <th style="padding: 12px; border-bottom: 2px solid #dee2e6;">⚙️ Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr style="background-color: #fff; border-bottom: 1px solid #dee2e6;">
                    <td style="padding: 12px;"><?php echo e($s->nama); ?></td>
                    <td style="padding: 12px;"><?php echo e($s->kelas); ?></td>
                    <td style="padding: 12px;">
                        <a href="<?php echo e(route('siswa.edit', $s->id)); ?>"
                           style="padding: 6px 12px; background-color: #ffc107; color: white; text-decoration: none; border-radius: 4px; margin-right: 5px;">✏️ Edit</a>
                        <form action="<?php echo e(route('siswa.destroy', $s->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    style="padding: 6px 12px; background-color: #dc3545; color: white; border: none; border-radius: 4px;">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3" style="padding: 12px; text-align: center; color: #6c757d;">Belum ada data siswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\manajemen_sekolah\manajemen_sekolah\resources\views/siswa/index.blade.php ENDPATH**/ ?>