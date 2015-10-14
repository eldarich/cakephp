<h1>Категории:</h1>

<?php echo $this->element('menu') ?>
<div class="content">
<table>
<tr>
<td>ID</td>
<td>Название</td>
<td>Дата созданиея</td>
<td>Дата изменения</td>
<td>Действия</td>
</tr>
<?php foreach ($categories as $category) : ?>
<tr>
<td><?php echo $category ['Category']['id'] ?></td>
<td><?php echo $this->Html->link ($category ['Category']['title'] , array ('action' => 'view' , $category ['Category']['id'] )) ?></td>
<td><?php echo $category ['Category']['created'] ?></td>
<td><?php echo $category ['Category']['modified'] ?></td>
<td><?php echo $this->Html->link('Edit',array('action'=>'edit',$category['Category']['id'])) ?> | <?php echo $this->Form->postLink('Delete',array('delete',$category['Category']['id']),array('confirm' => 'Подтвердите удаление!')) ?></td>

</tr>
<?php endforeach; ?>
</table>
</div>
