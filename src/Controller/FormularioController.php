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

/*SELECT * from centroinfantil, sala, cobertura, carpetaninos,carpetaedus,eduinicial WHERE centroinfantil.id=3 AND sala.centroinfantil_id=centroinfantil.id and sala.id=cobertura.sala_id AND cobertura.centroinfantil_id = 3 and cobertura.sala_id = carpetaninos.sala_id AND carpetaninos.sala_id = carpetaedus.sala_id and carpetaedus.sala_id = eduinicial.sala_id */

/*
in php.ini
; How many GET/POST/COOKIE input variables may be accepted
max_input_vars = 10000

*/
class FormularioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {   
        $this->loadModel('Centroinfantil');

        $centroinfantil = $this->paginate($this->Centroinfantil);

        $this->set(compact('centroinfantil'));

        //$this->redirect(['controller'=>'titlesController', 'action'=>'success', $variableValue]);//$variableValue any value you can send.
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
        $this->loadModel('Centroinfantil');
        $this->loadModel('Sala');
        $this->loadModel('Cobertura');
        $this->loadModel('Carpetaninos');
        $this->loadModel('Carpetaedus');
        $this->loadModel('Eduinicial');
        
        
        $centroinfantil = $this->Centroinfantil->get($id, ['contain' => []]);
        //$sala = $this->Sala->get( ['where' => []]);
        $sala = $this->Sala->find()->select()->where(['centroinfantil_id'=>$id])->toArray();
        foreach ($sala as $k => $v) {
            $salas[$v['id']] = $v['nombre'];
            //$salas[$k] = $v['nombre'];
        }

        if ($this->request->is('post')) {
            
            pr($this->request);
            exit;
            /* * * * * * */
            //$this->request->data(['cobertura'][]
            $cobertura_array = $this->Cobertura->newEntities($this->request->data(['cobertura']));
            foreach ($cobertura_array as $cobertura) {
                if( $this->Cobertura->save($cobertura) ){
                    $success = true;
                } else {
                    $success = false;
                }
            }

            $carpetaninos_array = $this->Carpetaninos->newEntities($this->request->data(['carpetaninos']));
            foreach ($carpetaninos_array as $carpetaninos) {
                if( $this->Carpetaninos->save($carpetaninos) ){
                    $success = true;
                } else {
                    $success = false;
                }
            }

            $carpetaedus_array = $this->Carpetaedus->newEntities($this->request->data(['carpetaedus']));
            foreach ($carpetaedus_array as $carpetaedus) {
                if( $this->Carpetaedus->save($carpetaedus) ){
                    $success = true;
                } else {
                    $success = false;
                }
            }

            $eduinicial_array = $this->Eduinicial->newEntities($this->request->data(['eduinicial']));
            foreach ($eduinicial_array as $eduinicial) {
                if( $this->Eduinicial->save($eduinicial) ){
                    $success = true;
                } else {
                    $success = false;
                }
            }

            // if($success) {
            //     $this->Flash->success(__('Datos guardados correctamente'));
            //     return $this->redirect(['controller' => 'index', 'action' => 'index']);
            // } else {
            //     $this->Flash->error(__('Error en el almacenamiento de datos'));
            // }
            //exit;

            //$formulario = $this->Formulario->patchEntity($formulario, $this->request->getData());
            
            // if ($this->Formulario->save($formulario)) {
            //     $this->Flash->success(__('The centroinfantil has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }

           // $this->Flash->error(__('The centroinfantil could not be saved. Please, try again.'));
        } 
        $this->set(['centroinfantil' => $centroinfantil, 'salas' => $salas]);
        
    }


    /**
     * View method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $centroinfantil = $this->Centroinfantil->get($id, [
            'contain' => ['Sala']
        ]);

        $this->set('centroinfantil', $centroinfantil);
    }*/


    /**
     * Edit method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function edit($id = null)
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
    }*/

    /**
     * Delete method
     *
     * @param string|null $id Centroinfantil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    
    /*public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centroinfantil = $this->Centroinfantil->get($id);
        if ($this->Centroinfantil->delete($centroinfantil)) {
            $this->Flash->success(__('The centroinfantil has been deleted.'));
        } else {
            $this->Flash->error(__('The centroinfantil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
}
?>