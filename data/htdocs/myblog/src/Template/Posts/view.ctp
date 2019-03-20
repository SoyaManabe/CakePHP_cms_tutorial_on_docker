<h1>
<?= h($post->title); ?>
<?= $this->Html->link('Back', ['controller' => 'Posts', 'action'=>'index',]); ?>
</h1>

<p><?= nl2br(h($post->body)); ?></p>

<?php if (count($post->comments)) : ?>
<h2>Comments <span>(<?= count($post->comments); ?>)</span></h2>
<ul>
<?php foreach ($post->comments as $comment) : ?>
    <li>
        <?= h($comment->body); ?>
        <?= $this->Form->postLink(
            '[x]',
            ['controller'=>'Comments', 'action'=>'delete', $comment->id],
            ['confirm'=>'Are you sure?']
        ); 
        ?>
    </li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<h2>New Comment</h2>
<?= $this->Form->create(null, [
    'url' => ['controller'=>'Comments', 'action'=>'add']
]); ?>
<?= $this->Form->input('body'); ?>
<?= $this->Form->hidden('post_id', ['value'=>$post->id]); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>