<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Record Controller
 *
 * @property \App\Model\Table\RecordTable $Record
 *
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecordController extends AppController
{
	public function initialize(){
			parent::initialize();
			$this->ViewBuilder()->setLayout("recordLayout");
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
    }

    
}
