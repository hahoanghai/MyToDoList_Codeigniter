<?php

	class Home  extends Application{

		function __construct(){
			parent::__construct();
		}


		public function index(){
			redirect("users/index");
		}
	}