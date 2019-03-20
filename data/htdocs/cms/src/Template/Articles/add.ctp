<!-- File: src/Template/Articles/add.ctp -->
<h1>記事の追加</h1>
<?php 
echo $this->Form->create($article);
echo $this->Form->controll('user_id', ['type' => 'hidden', 'value' => 1]);
echo $this->Form->controll('title');
echo $this->Form->controll('tags._ids', ['options' => $tags]);
echo $this->Form->controll('body', ['rows' => '3']);
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>