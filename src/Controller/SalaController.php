<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sala Controller
 *
 * @property \App\Model\Table\SalaTable $Sala
 *
 * @method \App\Model\Entity\Sala[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Centroinfantil']
        ];
        $sala = $this->paginate($this->Sala);

        $this->set(compact('sala'));
    }

    /**
     * View method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sala = $this->Sala->get($id, [
            'contain' => ['Centroinfantil', 'Administrativo', 'Ambiente', 'Carpetaedus', 'Carpetaninos', 'Cocina', 'Deposito', 'Educadoras', 'Eduinicial', 'Higiene', 'Infraestructura', 'Ninos', 'Nutricion', 'Salud']
        ]);

        $this->set('sala', $sala);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sala = $this->Sala->newEntity();
        if ($this->request->is('post')) {
            $sala = $this->Sala->patchEntity($sala, $this->request->getData());
            if ($this->Sala->save($sala)) {
                $this->Flash->success(__('The sala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sala could not be saved. Please, try again.'));
        }
        $centroinfantil = $this->Sala->Centroinfantil->find('list', ['limit' => 200]);
        $this->set(compact('sala', 'centroinfantil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sala = $this->Sala->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sala = $this->Sala->patchEntity($sala, $this->request->getData());
            if ($this->Sala->save($sala)) {
                $this->Flash->success(__('The sala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sala could not be saved. Please, try again.'));
        }
        $centroinfantil = $this->Sala->Centroinfantil->find('list', ['limit' => 200]);
        $this->set(compact('sala', 'centroinfantil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sala = $this->Sala->get($id);
        if ($this->Sala->delete($sala)) {
            $this->Flash->success(__('The sala has been deleted.'));
        } else {
            $this->Flash->error(__('The sala could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
