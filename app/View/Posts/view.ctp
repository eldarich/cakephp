<h3>Просмотр статьи</h3>

<?php echo $this->element('menu') ?>
<div class="content">
<h1><?php echo $post ['Post']['title'] ?></h1>
<p><?php echo $post ['Post']['body'] ?></p>
<p>Дата создания:<?php echo $post ['Post']['created'] ?></p>
</div>