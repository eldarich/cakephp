 <h1>Регистрация пользователя</h1>

<?php echo $this->element('menu') ?>
<div class="content">
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role',array(
'options' => array('user' => 'Пользователь','admin' => 'Администратор')
));
echo $this->Form->end('Зарегистрироваться'); 

?>
</div>
?>