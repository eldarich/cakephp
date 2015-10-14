<h1>Редактирование категории <?php echo $this->request->data['Category']['title'] ?></h1>

<?php echo $this->element('menu') ?>
<div class="content">
<?php
echo $this->Form->create('Category');
echo $this->Form->input('title');
echo $this->Form->hidden('id');
echo $this->Form->end('Изменить'); 
?>
</div>
?>