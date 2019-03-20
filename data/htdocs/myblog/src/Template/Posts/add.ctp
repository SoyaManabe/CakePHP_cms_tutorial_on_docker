<?php
$this->assign('title', 'Add New');
?>

<h1>
<?= $this->Html->link('Back', ['controller' => 'Posts', 'action'=>'index',]); ?>
Add New
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->input('body', ['rows'=>'3']); ?>
<?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>

