<?php
App::uses('AppController', 'Controller');
/**
 * Variants Controller
 *
 * @property Variant $Variant
 */
class VariantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Variant->recursive = 0;
		$this->set('variants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Variant->id = $id;
		if (!$this->Variant->exists()) {
			throw new NotFoundException(__('Invalid variant'));
		}
		$this->set('variant', $this->Variant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Variant->create();
			if ($this->Variant->save($this->request->data)) {
				$this->Session->setFlash(__('The variant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variant could not be saved. Please, try again.'));
			}
		}
		$firmwares = $this->Variant->Firmware->find('list');
		$this->set(compact('firmwares'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Variant->id = $id;
		if (!$this->Variant->exists()) {
			throw new NotFoundException(__('Invalid variant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Variant->save($this->request->data)) {
				$this->Session->setFlash(__('The variant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The variant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Variant->read(null, $id);
		}
		$firmwares = $this->Variant->Firmware->find('list');
		$this->set(compact('firmwares'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Variant->id = $id;
		if (!$this->Variant->exists()) {
			throw new NotFoundException(__('Invalid variant'));
		}
		if ($this->Variant->delete()) {
			$this->Session->setFlash(__('Variant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Variant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
