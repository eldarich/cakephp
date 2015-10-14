<?php

class PostsController extends AppController {
	
//public $layout = 'new_layout';

	//public $uses = array ('Category','Post');
	public function index () {
		//$this->layout = 'new_layout';
		$this->set('posts',$this->Post->find('all'));
	}
	
	public function view($id = null){
		if (!$id) {
			throw new NotFoundException('Не передан ID');
		}
	$post = $this->Post->findById($id);
	if(!$post) {
		throw new NotFoundException('Такой статьи нет');
	}
	$this->set('post',$post);
}
public function add (){
	if ($this->request->is('post')) {
		$this->Post->create();
		if($this->Post->save($this->request->data)){
		$this->Session->setFlash('Статья добавлена');
		$this->redirect('/');
	
		}
		else {
			$this->Session->setFlash('Ошибка добавления статьи');
		
		}
		
	}
	$this->set('categories', $this->Post->Category->find('list'));
	$this->set('title_for_layout','Добавление статьи');
}

		public function delete($id = null) {
	if (!$id) {
			throw new NotFoundException('Не передан ID');
		}
	$post = $this->Post->findById($id);
	if(!$post) {
		throw new NotFoundException('Такой статьи нет');
}
if($this->Post->delete($id)){
		//$this->Session->setFlash('Статья удалена');
		$this->Session->setFlash('Статья удалена','default',array(),'good');
}else{
	$this->Session->setFlash('Ошибка удаления');
}
$this->redirect(array('action'=>'index'));

}
public function edit($id=null) {
if (!$id) {
			throw new NotFoundException('Не передан ID');
		}
	$post = $this->Post->findById($id);
	if(!$post) {
		throw new NotFoundException('Такой статьи нет');
}
$post = $this->Post->findById($id);
$this->set('categories', $this->Post->Category->find('list'));

$this->set('post',$post);

if($this->request->is(array('post','put'))) {
	if($this->Post->save($this->request->data)) {
		$this->Session->setFlash('Статья обновлена');
		return $this->redirect(array('action'=>'index'));
	}
	$this->Session->setFlash('Ошибка обновления');
}

if(!$this->request->data) {
	$this->request->data = $post;
}
	}
	public function search ($search = null) {
		if(!$search){
			$this->set('posts','Не введён поисковый запрос');
		}
		$this->set('posts',$this->Post->find('all',array(
		'conditions' => array ('Post.title LIKE' => '%' . $search . '%')
		)));
		$this->render('index');
		
	}
		
}

	
