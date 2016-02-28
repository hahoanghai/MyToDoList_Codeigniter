<?php

	class Home  extends Application{

		function __construct(){
			parent::__construct();
		}


		public function index(){
			$this->data['pagebody'] = 'homepage';
			$this->render();
		}
	}