  <?php

 class UsersController extends AppController {
	 
	 

 public function index() {
$this->set('users',$this->User->find('all'));
	}
public function add() {
	if ($this->request->is('post')) {
		$this->User->create();
		if($this->User->save($this->request->data)){
		$this->Session->setFlash('Пользователь добавлен');
		$this->redirect('/');
	
		}
		else {
			$this->Session->setFlash('Ошибка регистрации пользователя');
		
		}
		
	}

	//$this->set('title_for_layout','Добавление статьи');
	}
 }
 