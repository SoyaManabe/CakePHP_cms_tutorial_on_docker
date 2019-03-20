<h1>
<?= $this->Html->link('Add New', ['controller' => 'Posts', 'action'=>'add',]); ?>
Blog Posts
</h1>

<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
        <!-- <?= $this->Html->link($post->title, ['controller' => 'Posts', 'action'=>'view',]); ?> -->
        <a href="<?= $this->Url->build(['action'=>'view', $post->id]); ?>">
            <?= h($post->title); ?>
        </a>
        <?= $this->Html->link('[edit]', ['controller' => 'Posts', 'action'=>'edit', $post->id]); ?>
        <?= $this->Form->postLink(
            '[x]',
            ['action'=>'delete', $post->id],
            ['confirm'=>'Are you sure?']
        ); 
        ?>
        </li>
    <?php endforeach; ?>
</ul>