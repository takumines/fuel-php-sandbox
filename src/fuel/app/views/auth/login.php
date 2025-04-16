<h1 style="text-align: center; margin-bottom: 30px;">ログイン</h1>

<?php if ($message = Session::get_flash('error_message')): ?>
    <div class="alert alert-danger" style="text-align: center; color: red;">
        <?= e($message) ?>
    </div>
<?php endif; ?>

<div class="form" style="max-width: 500px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
    <?= Form::open(['action' => 'auth/login', 'method' => 'post']) ?>
    <?= Form::csrf(); ?>

    <div style="margin-bottom: 15px;">
        <?= Form::label('メールアドレス', 'email') ?><br>
        <?= Form::input('username', Input::post('email'), [
            'class' => 'form-control',
            'style' => 'width: 100%; padding: 8px;',
            'placeholder' => 'メールアドレス'
        ]) ?>
    </div>

    <div style="margin-bottom: 20px;">
        <?= Form::label('パスワード', 'password') ?><br>
        <?= Form::password('password', null, [
            'class' => 'form-control',
            'style' => 'width: 100%; padding: 8px;',
            'placeholder' => 'パスワード'
        ]) ?>
    </div>

    <div style="text-align: center;">
        <?= Form::submit('submit', 'ログイン', [
            'class' => 'btn btn-primary',
            'style' => 'padding: 10px 40px;'
        ]) ?>
    </div>

    <?= Form::close() ?>
</div>
