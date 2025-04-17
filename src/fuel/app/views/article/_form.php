<div class="form" style="max-width: 500px; margin: 0 auto; padding: 20px;">
    <?php echo Form::open(array("class"=>"form-horizontal")); ?>
    <?php echo Form::csrf() ?>

    <p>
        <?php echo Form::label('タイトル', 'title'); ?><br>
        <?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''), array('class' => 'form-control', 'style' => 'width: 100%;', 'placeholder'=>'タイトルを入力してください')); ?>
    </p>

    <p>
        <?php echo Form::label('内容', 'body'); ?><br>
        <?php echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''), array('class' => 'form-control', 'style' => 'width: 100%;', 'rows' => 8, 'placeholder'=>'内容を入力してください')); ?>
    </p>

    <p style="text-align: center;">
        <?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>
    </p>

    <?php echo Form::close(); ?>
</div>
