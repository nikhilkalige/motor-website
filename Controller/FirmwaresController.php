<?php
App::uses('AppController', 'Controller');
/**
 * Firmwares Controller
 *
 * @property Firmware $Firmware
 */
class FirmwaresController extends AppController
{
    public $helpers = array('Html', 'Form', 'FileUpload.FileUpload');
    public $components = array('FileUpload.FileUpload');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Firmware->recursive = 0;
		$this->set('firmwares', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Firmware->id = $id;
		if (!$this->Firmware->exists()) {
			throw new NotFoundException(__('Invalid firmware'));
		}
		$this->set('firmware', $this->Firmware->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

        pr($this->request->data);
		/*if ($this->request->is('post')) {
			$this->Firmware->create();
			if ($this->Firmware->save($this->request->data)) {
				$this->Session->setFlash(__('The firmware has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firmware could not be saved. Please, try again.'));
			}
		}
		$variants = $this->Firmware->Variant->find('list');
		$this->set(compact('variants'));*/
        if(!empty($this->data))
        {
            if($this->FileUpload->success)
            {
                //$this->set('photo', $this->FileUpload->finalFile);
                $this->Session->setFlash('Success');
            }
            else
            {
                $this->Session->setFlash($this->FileUpload->showErrors());
            }
        }
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Firmware->id = $id;
		if (!$this->Firmware->exists()) {
			throw new NotFoundException(__('Invalid firmware'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Firmware->save($this->request->data)) {
				$this->Session->setFlash(__('The firmware has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The firmware could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Firmware->read(null, $id);
		}
		$variants = $this->Firmware->Variant->find('list');
		$this->set(compact('variants'));
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
		$this->Firmware->id = $id;
		if (!$this->Firmware->exists()) {
			throw new NotFoundException(__('Invalid firmware'));
		}
		if ($this->Firmware->delete()) {
			$this->Session->setFlash(__('Firmware deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Firmware was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
