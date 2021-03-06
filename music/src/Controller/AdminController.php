<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

public function initialize() {
            parent::initialize();
            $this->viewBuilder()->setLayout('musiclayout');
        }
		
    public function beforeFilter(Event $event){
    $this->Auth->allow(['register','add','login']);
}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    
    public function index()
    {
        $admin = $this->paginate($this->Admin);

        $this->set(compact('admin'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);

        $this->set('admin', $admin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admin->get($id);
        if ($this->Admin->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
        if ($this->request->is('post')){
            $admin = $this->Auth->identify();
            if($admin){
                $this->Auth->setUser($admin);
                return $this->redirect(['controller' => 'Music','action' => 'home_admin']);
            }
            $this->Flash->error('Incorrect login');
        }
    }
     public function logout(){
        $this->Flash->success('you have loged out as admin');
        return $this->redirect($this->Auth->logout());
    }



  /*public function register()
{
    $admin= $this->Admin->newEntity();
    if($this->request->is('post'))
    {
        $admin=$this->Admin->patchEntity($admin, $this->request->data);
        if($this->Admin->save($admin))
        {
            $this->Flash->success('Welcome new ADMIN is register, login yourslef as a admin');
            return $this->redirect(['action'=>'login']);
        }
        else
        {
            $this->Flash->error('you have not registerd as an admin**************');
        }
    }
    $this->set(compact('admin'));
    $this->set('_serialzie',['admin']);

}*/

    
}
