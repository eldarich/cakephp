<h1>Добавление категории</h1>

<?php echo $this->element('menu') ?>
<div class="content">
<?php
echo $this->Form->create('Category');
echo $this->Form->input('title');
echo $this->Form->end('Сохранить'); 
?>
</div>
?>