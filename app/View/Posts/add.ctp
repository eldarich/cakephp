<h1>Добавление статьи</h1>

<?php echo $this->element('menu') ?>
<div class="content">
<?php
echo $this->Form->create('Post');
echo $this->Form->input('category_id',array('label' => 'Выберите категорию'));
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('Сохранить'); 
?>
</div>
?>