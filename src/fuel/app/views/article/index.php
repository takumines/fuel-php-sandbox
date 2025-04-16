<h2><span class='muted'>記事一覧</span></h2>
<br>
<?php if ($articles): ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>		<tr>

            <td><?php echo $article->title; ?></td>
            <td><?php echo $article->content; ?></td>
            <td>
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <?php echo Html::anchor('articles/'.$article->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>
                        <?php echo Html::anchor('post/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>
                        <?php echo Html::anchor('post/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>
                    </div>
                </div>

            </td>
        </tr>
        <?php endforeach; ?>	</tbody>
    </table>

<?php else: ?>
    <p>No Posts.</p>

<?php endif; ?><p>
    <?php echo Html::anchor('articles/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>