<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MovieDesc Controller
 *
 * @property \App\Model\Table\MovieDescTable $MovieDesc
 */
class MovieDescController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $movieDesc = $this->paginate($this->MovieDesc);

        $this->set(compact('movieDesc'));
        $this->set('_serialize', ['movieDesc']);
    }

    /**
     * View method
     *
     * @param string|null $id Movie Desc id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movieDesc = $this->MovieDesc->get($id, [
            'contain' => ['Movies']
        ]);

        $this->set('movieDesc', $movieDesc);
        $this->set('_serialize', ['movieDesc']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movieDesc = $this->MovieDesc->newEntity();
        if ($this->request->is('post')) {
            $movieDesc = $this->MovieDesc->patchEntity($movieDesc, $this->request->getData());
            if ($this->MovieDesc->save($movieDesc)) {
                $this->Flash->success(__('The movie desc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie desc could not be saved. Please, try again.'));
        }
        $this->set(compact('movieDesc'));
        $this->set('_serialize', ['movieDesc']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movie Desc id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movieDesc = $this->MovieDesc->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movieDesc = $this->MovieDesc->patchEntity($movieDesc, $this->request->getData());
            if ($this->MovieDesc->save($movieDesc)) {
                $this->Flash->success(__('The movie desc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie desc could not be saved. Please, try again.'));
        }
        $this->set(compact('movieDesc'));
        $this->set('_serialize', ['movieDesc']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movie Desc id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movieDesc = $this->MovieDesc->get($id);
        if ($this->MovieDesc->delete($movieDesc)) {
            $this->Flash->success(__('The movie desc has been deleted.'));
        } else {
            $this->Flash->error(__('The movie desc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
