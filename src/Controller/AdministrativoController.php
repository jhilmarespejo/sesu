<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrativo Controller
 *
 * @property \App\Model\Table\AdministrativoTable $Administrativo
 *
 * @method \App\Model\Entity\Administrativo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministrativoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administrativo = $this->paginate($this->Administrativo);

        $this->set(compact('administrativo'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrativo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrativo = $this->Administrativo->get($id, [
            'contain' => []
        ]);

        $this->set('administrativo', $administrativo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrativo = $this->Administrativo->newEntity();
        if ($this->request->is('post')) {
            $administrativo = $this->Administrativo->patchEntity($administrativo, $this->request->getData());
            if ($this->Administrativo->save($administrativo)) {
                $this->Flash->success(__('The administrativo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrativo could not be saved. Please, try again.'));
        }
        $this->set(compact('administrativo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrativo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrativo = $this->Administrativo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrativo = $this->Administrativo->patchEntity($administrativo, $this->request->getData());
            if ($this->Administrativo->save($administrativo)) {
                $this->Flash->success(__('The administrativo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrativo could not be saved. Please, try again.'));
        }
        $this->set(compact('administrativo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrativo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrativo = $this->Administrativo->get($id);
        if ($this->Administrativo->delete($administrativo)) {
            $this->Flash->success(__('The administrativo has been deleted.'));
        } else {
            $this->Flash->error(__('The administrativo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
