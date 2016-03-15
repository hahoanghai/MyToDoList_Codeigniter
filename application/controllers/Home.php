<?php

	class Home  extends Application{

		function __construct(){
			parent::__construct();
		}


		public function index(){
			 if($this->session->userdata('logged_in')){
			            //Get the logged in users id
			            $user_id = $this->session->userdata('user_id');
			            $username = $this->session->userdata('username');
			            //Get all lists from the model
			        //    $data['lists'] = $this->List_model->get_all_lists($user_id);
			         //   $data['tasks'] = $this->Task_model->get_users_tasks($user_id);
			            $this->data['username'] = $username;
			            $this->data['nav_bar'] = 'member_navbar';
			            $this->data['pagebody'] = 'homepage';
			            $this->render();
			}else{
				redirect("users/index");
			}
		}

		public function logout(){
		        //Unset user data
		        $this->session->unset_userdata('logged_in');
		        $this->session->unset_userdata('user_id');
		        $this->session->unset_userdata('username');
		        $this->session->sess_destroy();
		        
		         //Set message
		        $this->session->set_flashdata('logged_out', 'You have been logged out');
		        redirect('home/index');
		    }
	}