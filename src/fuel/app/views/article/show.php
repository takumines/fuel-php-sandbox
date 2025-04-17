<p>
    <strong>Title:</strong>
    <?php echo $article->title; ?></p>
<p>
    <strong>Content:</strong>
    <?php echo $article->body; ?></p>

<?php if (Auth::get('id') == $article->user_id): ?>
    <?php echo Html::anchor('articles/edit/'.$article->id, 'Edit'); ?> |
    <?php echo Html::anchor('articles/delete/'.$article->id, 'Delete', ['onclick' => "return confirm('Are you sure?')"]); ?>
<?php endif; ?> |
<?php echo Html::anchor('articles', 'Back'); ?>