<?php
class Users extends Application{

    function __construct(){
        parent::__construct();
    }  

    public function index(){
        $this->data['pagebody'] = 'login';
        $this->data['error'] = "Have an account ?";
        $this->render();
    }
    
    public function register(){
        if($this->session->userdata('logged_in')){
            redirect('home/index');
        }
        $this->data['pagebody'] = 'register';

        $this->form_validation->set_rules('first_name','First Name','trim|required');
        $this->form_validation->set_rules('last_name','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('password2','Confirm Password','trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE){
          $this->data['username_error'] = form_error('username');
          $this->data['firstname_error'] = form_error('first_name');
          $this->data['lastname_error'] = form_error('last_name');
          $this->data['email_error'] = form_error('email');
          $this->data['password_error'] = form_error('password');          
          $this->data['repassword_error'] = form_error('password2');
           $this->render();
        //Validation has ran and passed    
        } else {
           if($this->User_model->create_member()){
                $this->session->set_flashdata('registered', 'You are now registered, please log in !');
                //Redirect to index page with error above
               $this->data['pagebody'] = 'login';
                $this->render();
           }
        }
    }
    
    
    public function login(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');      
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');        
        $this->data['pagebody'] = 'login';
        
        if($this->form_validation->run() == FALSE){
            //Set error
            //$this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');
          $this->data['error'] = 'Sorry, the login info that you entered is invalid !';
            $this->render();
        } else {
           //Get from post
           $username = $this->input->post('username');
           $password = $this->input->post('password');
               
           //Get user id from model
           $user_id = $this->User_model->login_user($username,$password);
               
           //Validate user
           if($user_id){
               //Create array of user data
               $user_data = array(
                       'user_id'   => $user_id,
                       'username'  => $username,
                       'logged_in' => true
                );
                //Set session userdata
               $this->session->set_userdata($user_data);
                                  
               //redirect('home/index');
            } else {
                //Set error
                 $this->data['error'] = 'Sorry, the login info that you entered is invalid !';
                 $this->render();
            }
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