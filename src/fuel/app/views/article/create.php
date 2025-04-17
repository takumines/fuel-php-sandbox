<div style="max-width: 500px; margin: 0 auto; padding: 20px;">
    <?php if ($errors): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $field => $error): ?>
                <li><?= e($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (Session::get_flash('error_message')): ?>
        <div style="text-align: center; color: red;">
            <?= Session::get_flash('error_message') ?>
        </div>
    <?php endif; ?>
</div>

<?php echo render('article/_form'); ?>