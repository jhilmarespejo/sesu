<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centroinfantil Controller
 *
 * @property \App\Model\Table\CentroinfantilTable $Centroinfantil
 *
 * @method \App\Model\Entity\Centroinfantil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CentroinfantilController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $centroinfantil = $this->paginate($this->Centroinfantil);

        $this->set(compact('centroinfantil'));
    }

    /**
     * View method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centroinfantil = $this->Centroinfantil->get($id, [
            'contain' => ['Sala']
        ]);

        $this->set('centroinfantil', $centroinfantil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centroinfantil = $this->Centroinfantil->newEntity();
        if ($this->request->is('post')) {
            $centroinfantil = $this->Centroinfantil->patchEntity($centroinfantil, $this->request->getData());
            if ($this->Centroinfantil->save($centroinfantil)) {
                $this->Flash->success(__('The centroinfantil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centroinfantil could not be saved. Please, try again.'));
        }
        $this->set(compact('centroinfantil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centroinfantil = $this->Centroinfantil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centroinfantil = $this->Centroinfantil->patchEntity($centroinfantil, $this->request->getData());
            if ($this->Centroinfantil->save($centroinfantil)) {
                $this->Flash->success(__('The centroinfantil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centroinfantil could not be saved. Please, try again.'));
        }
        $this->set(compact('centroinfantil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centroinfantil = $this->Centroinfantil->get($id);
        if ($this->Centroinfantil->delete($centroinfantil)) {
            $this->Flash->success(__('The centroinfantil has been deleted.'));
        } else {
            $this->Flash->error(__('The centroinfantil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
