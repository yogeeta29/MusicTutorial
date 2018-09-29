<?php

	namespace App\Controller;

	use App\Controller\AppController;


	class NotebookController extends AppController {

		public function initialize() {
			parent::initialize();
			$this->viewBuilder()->setLayout('musiclayout');
		}

		public function index() {

			$this->set("title","MusikSkool-Notebook");

		}
		
	}

?>