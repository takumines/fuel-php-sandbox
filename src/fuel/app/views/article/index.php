<?php if ($articles): ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>タイトル</th>
            <th>内容</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>		<tr>

            <td><?php echo $article->title; ?></td>
            <td><?php echo $article->body; ?></td>
            <td>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?php echo Html::anchor('articles/view/'.$article->id, '<i class="icon-eye-open"></i> 閲覧', array('class' => 'btn btn-default btn-sm')); ?>
                        <?php if (Auth::get('id') == $article->user_id): ?>
                            <?php echo Html::anchor('articles/edit/'.$article->id, '<i class="icon-wrench"></i> 編集', array('class' => 'btn btn-default btn-sm')); ?>
                            <?php echo Html::anchor('articles/delete/'.$article->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('本当に削除しますか？')")); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </td>
        </tr>
        <?php endforeach; ?>	</tbody>
    </table>

<?php else: ?>
    <p>記事がありません。</p>

<?php endif; ?><p>
    <?php echo Html::anchor('articles/create', '新規作成', array('class' => 'btn btn-success')); ?>

</p>