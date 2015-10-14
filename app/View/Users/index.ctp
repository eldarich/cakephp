 <h1>Список пользователей:</h1>

<?php echo $this->element('menu') ?>
<div class="content">

<table>
<tr>
<td>ID</td>
<td>Логин</td>
<td>Пароль</td>
<td>Роль</td>
</tr>
<?php foreach ($users as $user) : ?>
<tr>
<td><?php echo $user ['User']['id'] ?></td>
<td><?php echo $user ['User']['username'] ?></td>
<td><?php echo $user ['User']['password'] ?></td>
<td><?php echo $user ['User']['role'] ?></td>



</tr>
<?php endforeach; ?>
</table>
</div>
