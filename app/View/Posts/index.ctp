<h1>Статьи:</h1>

<?php echo $this->element('menu') ?>
<div class="content">
<?php if(is_array($posts)) : ?>
<table>
<tr>
<td>ID</td>
<td>Название</td>
<td>Содержание</td>
<td>Дата созданиея</td>
<td>Дата изменения</td>
<td>Действия</td>
</tr>
<?php foreach ($posts as $post) : ?>
<tr>
<td><?php echo $post ['Post']['id'] ?></td>
<td><?php echo $this->Html->link ($post ['Post']['title'] , array ('controller' => 'posts','action' => 'view' , $post ['Post']['id'] )) ?></td>
<td><?php echo $post ['Post']['body'] ?></td>
<td><?php echo $post ['Post']['created'] ?></td>
<td><?php echo $post ['Post']['modified'] ?></td>
<td><?php echo $this->Html->link('Edit',array('action'=>'edit',$post['Post']['id'])) ?> | <?php echo $this->Form->postLink('Delete',array('delete',$post['Post']['id']),array('confirm' => 'Подтвердите удаление!')) ?></td>

</tr>
<?php endforeach; ?>
</table>
<?php else : ?>
<?php echo $posts; ?>
<?php endif; ?>
</div>
