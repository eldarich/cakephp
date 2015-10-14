<?php

class CategoriesController extends AppController {
	public function index () {
		$this->set('categories',$this->Category->find('all'));
	//	debug($categories);
	}
	public function edit($id=null) {
if (!$id) {
			throw new NotFoundException('Не передан ID');
		}
	$post = $this->Category->findById($id);
	if(!$post) {
		throw new NotFoundException('Такой категории нет');
}
$category = $this->Category->findById($id);
debug($category);

$this->set('post',$post);

if($this->request->is(array('post','put'))) {
	if($this->Category->save($this->request->data)) {
		$this->Session->setFlash('Категория обновлена','good');
		return $this->redirect(array('action'=>'index'));
	}
	$this->Session->setFlash('Ошибка обновления категории');
}

if(!$this->request->data) {
	$this->request->data = $category;
}
	}
	
	public function add (){
	if ($this->request->is('post')) {
		$this->Category->create();
		if($this->Category->save($this->request->data)){
		$this->Session->setFlash('Категория добавлена','good');
		$this->redirect(array('action' => 'index'));
	
		}
		else {
			$this->Session->setFlash('Ошибка добавления категории');
		
		}
		
	}

}
	public function delete($id = null) {
	if (!$id) {
			throw new NotFoundException('Не передан ID');
		}
	$post = $this->Category->findById($id);
	if(!$post) {
		throw new NotFoundException('Такой категории нет');
}
if($this->Category->delete($id)){
		//$this->Session->setFlash('Статья удалена');
		$this->Session->setFlash('Категория удалена','default',array(),'good');
}else{
	$this->Session->setFlash('Ошибка удаления');
}
$this->redirect(array('action'=>'index'));

}
	
}