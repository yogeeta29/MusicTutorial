<?php

	namespace App\Controller;

	use App\Controller\AppController;

	class MusicController extends AppController {

		public function initialize() {
			parent::initialize();
			$this->viewBuilder()->setLayout('musiclayout');
		}

		public function index() {
			$this->set("title","MusikSkool");
		}

		public function home() {
			$this->set("title","MusikSkool");
		}

		public function homeAdmin() {
			$this->set("title","MusikSkool");
		}		

	}

?>