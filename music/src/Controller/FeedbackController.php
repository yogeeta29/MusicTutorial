<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feedback Controller
 *
 * @property \App\Model\Table\FeedbackTable $Feedback
 *
 * @method \App\Model\Entity\Feedback[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeedbackController extends AppController
{
	public function initialize() {
			parent::initialize();
			$this->viewBuilder()->setLayout('musiclayout');
		}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $feedback = $this->Feedback->newEntity();
        if ($this->request->is('post')) {
            $feedback = $this->Feedback->patchEntity($feedback, $this->request->getData());
            if ($this->Feedback->save($feedback)) {
                $this->Flash->success(__('The feedback has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feedback could not be saved. Please, try again.'));
        }
        $this->set(compact('feedback'));
    }
	
	public function indexAdmin()
    {
		$feedback = $this->paginate($this->Feedback);

        $this->set(compact('feedback'));
    }
	
	public function view($id = null)
    {
        $feedback = $this->Feedback->get($id, [
            'contain' => []
        ]);

        $this->set('feedback', $feedback);
    }


    /**
     * Edit method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedback = $this->Feedback->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedback = $this->Feedback->patchEntity($feedback, $this->request->getData());
            if ($this->Feedback->save($feedback)) {
                $this->Flash->success(__('The feedback has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feedback could not be saved. Please, try again.'));
        }
        $this->set(compact('feedback'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feedback id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedback = $this->Feedback->get($id);
        if ($this->Feedback->delete($feedback)) {
            $this->Flash->success(__('The feedback has been deleted.'));
        } else {
            $this->Flash->error(__('The feedback could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index_admin']);
    }

}