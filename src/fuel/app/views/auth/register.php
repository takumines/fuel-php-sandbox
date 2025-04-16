<h1 style="text-align: center;">ユーザー登録</h1>

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

<div class="form" style="max-width: 500px; margin: 0 auto; padding: 20px;">
    <?= Form::open(['action' => 'auth/register', 'method' => 'post']) ?>
    <?= Form::csrf(); ?>
    <p>
        <?= Form::label('ユーザー名', 'username') ?><br>
        <?= Form::input('username', Input::post('username'), ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
    </p>

    <p>
        <?= Form::label('メールアドレス', 'email') ?><br>
        <?= Form::input('email', Input::post('email'), ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
    </p>

    <p>
        <?= Form::label('パスワード', 'password') ?><br>
        <?= Form::password('password', null, ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
    </p>

    <p>
        <?= Form::label('パスワード（確認）', 'password_confirm') ?><br>
        <?= Form::password('password_confirm', null, ['class' => 'form-control', 'style' => 'width: 100%;']) ?>
    </p>

    <p style="text-align: center;">
        <?= Form::submit('submit', '登録', ['class' => 'btn btn-primary']) ?>
    </p>

    <?= Form::close() ?>
</div>
