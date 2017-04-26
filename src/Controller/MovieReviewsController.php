<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MovieReviews Controller
 *
 * @property \App\Model\Table\MovieReviewsTable $MovieReviews
 */
class MovieReviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $movieReviews = $this->paginate($this->MovieReviews);

        $this->set(compact('movieReviews'));
        $this->set('_serialize', ['movieReviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Movie Review id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $movieReview = $this->MovieReviews->get($id, [
            'contain' => []
        ]);

        $this->set('movieReview', $movieReview);
        $this->set('_serialize', ['movieReview']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $movieReview = $this->MovieReviews->newEntity();
        if ($this->request->is('post')) {
            $movieReview = $this->MovieReviews->patchEntity($movieReview, $this->request->getData());
            if ($this->MovieReviews->save($movieReview)) {
                $this->Flash->success(__('The movie review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie review could not be saved. Please, try again.'));
        }
        $this->set(compact('movieReview'));
        $this->set('_serialize', ['movieReview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Movie Review id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $movieReview = $this->MovieReviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movieReview = $this->MovieReviews->patchEntity($movieReview, $this->request->getData());
            if ($this->MovieReviews->save($movieReview)) {
                $this->Flash->success(__('The movie review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The movie review could not be saved. Please, try again.'));
        }
        $this->set(compact('movieReview'));
        $this->set('_serialize', ['movieReview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Movie Review id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movieReview = $this->MovieReviews->get($id);
        if ($this->MovieReviews->delete($movieReview)) {
            $this->Flash->success(__('The movie review has been deleted.'));
        } else {
            $this->Flash->error(__('The movie review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
