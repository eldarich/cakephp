 <div class="actions">
<ul>
<li><a href="/cakephp/posts">Главная</a></li>
<li><?php echo $this->Html->link('Добавить статью','/posts/add')  ?></li>
<li><?php echo $this->Html->link('Список категорий',array('controller' => 'categories','action'=>'index')) ?></li>
<li><?php echo $this->Html->link('Новая категория','/categories/add')  ?></li>
<li><?php echo $this->Html->link('Список пользователей',array('controller' => 'users','action' => 'index'))  ?></li>
<li><?php echo $this->Html->link('Регистрация пользователя','/users/add')  ?></li>
</ul>
</div>