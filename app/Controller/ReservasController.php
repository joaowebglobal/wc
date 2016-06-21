<?php
App::uses('AppController', 'Controller');
/**
 * Reservas Controller
 *
 * @property Reserva $Reserva
 * @property PaginatorComponent $Paginator
 */
class ReservasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reserva->recursive = 0;
		$this->set('reservas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reserva->exists($id)) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		$options = array('conditions' => array('Reserva.' . $this->Reserva->primaryKey => $id));
		$this->set('reserva', $this->Reserva->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reserva->create();
			if ($this->Reserva->save($this->request->data)) {
				$this->Flash->success(__('The reserva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reserva could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Reserva->Cliente->find('list');
		$sessions = $this->Reserva->Session->find('list');
		$this->set(compact('clientes', 'sessions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reserva->exists($id)) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reserva->save($this->request->data)) {
				$this->Flash->success(__('The reserva has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reserva could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reserva.' . $this->Reserva->primaryKey => $id));
			$this->request->data = $this->Reserva->find('first', $options);
		}
		$clientes = $this->Reserva->Cliente->find('list');
		$sessions = $this->Reserva->Session->find('list');
		$this->set(compact('clientes', 'sessions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reserva->id = $id;
		if (!$this->Reserva->exists()) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reserva->delete()) {
			$this->Flash->success(__('The reserva has been deleted.'));
		} else {
			$this->Flash->error(__('The reserva could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
