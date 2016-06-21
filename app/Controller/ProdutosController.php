<?php
App::uses('AppController', 'Controller');
/**
 * Produtos Controller
 *
 * @property Produto $Produto
 * @property PaginatorComponent $Paginator
 */
class ProdutosController extends AppController {

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
		$this->Produto->recursive = 0;
		$this->set('produtos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
		$this->set('produto', $this->Produto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
				$this->Flash->success(__('The produto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produto could not be saved. Please, try again.'));
			}
		}
		$promoVigentePors = $this->Produto->PromoVigentePor->find('list');
		$promoPorPercDescontos = $this->Produto->PromoPorPercDesconto->find('list');
		$promoPorValorDescontos = $this->Produto->PromoPorValorDesconto->find('list');
		$promoVigenteAvistas = $this->Produto->PromoVigenteAvistum->find('list');
		$promoAvistaPercDescontos = $this->Produto->PromoAvistaPercDesconto->find('list');
		$cursosNoticias = $this->Produto->CursosNoticium->find('list');
		$cursos = $this->Produto->Curso->find('list');
		$marketplaceB2wBatches = $this->Produto->MarketplaceB2wBatch->find('list');
		$marketplaces = $this->Produto->Marketplace->find('list');
		$news = $this->Produto->News->find('list');
		$noticias = $this->Produto->Noticium->find('list');
		$campanhas = $this->Produto->Campanha->find('list');
		$colaboradores = $this->Produto->Colaboradore->find('list');
		$comparadores = $this->Produto->Comparadore->find('list');
		$selos = $this->Produto->Selo->find('list');
		$vitrines = $this->Produto->Vitrine->find('list');
		$this->set(compact('promoVigentePors', 'promoPorPercDescontos', 'promoPorValorDescontos', 'promoVigenteAvistas', 'promoAvistaPercDescontos', 'cursosNoticias', 'cursos', 'marketplaceB2wBatches', 'marketplaces', 'news', 'noticias', 'campanhas', 'colaboradores', 'comparadores', 'selos', 'vitrines'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException(__('Invalid produto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produto->save($this->request->data)) {
				$this->Flash->success(__('The produto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
			$this->request->data = $this->Produto->find('first', $options);
		}
		$promoVigentePors = $this->Produto->PromoVigentePor->find('list');
		$promoPorPercDescontos = $this->Produto->PromoPorPercDesconto->find('list');
		$promoPorValorDescontos = $this->Produto->PromoPorValorDesconto->find('list');
		$promoVigenteAvistas = $this->Produto->PromoVigenteAvistum->find('list');
		$promoAvistaPercDescontos = $this->Produto->PromoAvistaPercDesconto->find('list');
		$cursosNoticias = $this->Produto->CursosNoticium->find('list');
		$cursos = $this->Produto->Curso->find('list');
		$marketplaceB2wBatches = $this->Produto->MarketplaceB2wBatch->find('list');
		$marketplaces = $this->Produto->Marketplace->find('list');
		$news = $this->Produto->News->find('list');
		$noticias = $this->Produto->Noticium->find('list');
		$campanhas = $this->Produto->Campanha->find('list');
		$colaboradores = $this->Produto->Colaboradore->find('list');
		$comparadores = $this->Produto->Comparadore->find('list');
		$selos = $this->Produto->Selo->find('list');
		$vitrines = $this->Produto->Vitrine->find('list');
		$this->set(compact('promoVigentePors', 'promoPorPercDescontos', 'promoPorValorDescontos', 'promoVigenteAvistas', 'promoAvistaPercDescontos', 'cursosNoticias', 'cursos', 'marketplaceB2wBatches', 'marketplaces', 'news', 'noticias', 'campanhas', 'colaboradores', 'comparadores', 'selos', 'vitrines'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException(__('Invalid produto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produto->delete()) {
			$this->Flash->success(__('The produto has been deleted.'));
		} else {
			$this->Flash->error(__('The produto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
