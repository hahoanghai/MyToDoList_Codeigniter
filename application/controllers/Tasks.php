<?php
class Tasks extends Application { 

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){

            redirect('home/index');
        }
    }
    
    public function index(){
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $this->data['tasks'] = $this->Task_model->get_users_tasks($user_id);
        //Load view and layout
        $this->data['username'] = $username;
        $this->data['nav_bar'] = 'member_navbar';
        $this->data['pagebody'] = 'tasks/home';
        $this->render();
    }

     public function show($id){
        //Get single task info
        $data['task'] = $this->Task_model->get_task($id);
        //Check if marked complete
        $data['is_complete'] = $this->Task_model->check_if_complete($id);
       
        //Load view and layout
        $data['main_content'] = 'tasks/show';
        $this->load->view('layouts/main',$data);
    }
    
     public function add(){
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $this->form_validation->set_rules('task_name','Task Name','trim|required');
        $this->form_validation->set_rules('task_body','Task Body','trim');       
        $this->form_validation->set_rules('due_date','Due Date','trim|required');
        if($this->form_validation->run() == FALSE){
            $this->data['taskname'] = $this->input->post('task_name');
            $this->data['taskbody'] = $this->input->post('task_body');
            $this->data['taskname_error'] = form_error('task_name');
            $this->data['taskbody_error'] = form_error('task_body');
            $this->data['duedate_error'] = form_error('due_date');          
            //Load view and layout
            $this->data['username'] = $username;
            $this->data['nav_bar'] = 'member_navbar';
            $this->data['pagebody'] = 'tasks/add';
            $this->render();
        } else {
             //Post values to array
            $data = array(             
                'task_name'    => $this->input->post('task_name'),
                'task_body'    => $this->input->post('task_body'),
                'due_date'     => $this->input->post('due_date'),
                'user_id'      => $user_id
            );
           
           if($this->Task_model->create_task($data)){
                $this->session->set_flashdata('task_created', 'Your task has been created');
                //Redirect to index page with error above
                redirect("tasks");
           }
        }
    }
    
    
     public function edit($task_id){
         $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $this_task = $this->Task_model->get_task_data($task_id);

        $this->form_validation->set_rules('task_name','Task Name','trim|required');
        $this->form_validation->set_rules('task_body','Task Body','trim');       
           $this->form_validation->set_rules('due_date','Due Date','trim|required');
        if($this->form_validation->run() == FALSE){
            //Get the current task info
            //$data['this_task'] = $this->Task_model->get_task_data($task_id);
            //Load view and layout
            $this->data['id'] = $task_id;
            $this->data['taskname'] = $this_task->task_name;
            $this->data['taskbody'] = $this_task->task_body;
            $this->data['duedate'] = $this_task->due_date;
            $this->data['isdone'] = $this_task->is_completed;
            $this->data['taskname_error'] = form_error('task_name');
            $this->data['taskbody_error'] = form_error('task_body');
            $this->data['duedate_error'] = form_error('due_date');          
            //Load view and layout
            $this->data['username'] = $username;
            $this->data['nav_bar'] = 'member_navbar';
            $this->data['pagebody'] = 'tasks/edit';
            $this->render();
        } else {
          
            $is_completed = "unchecked";
            if($this->input->post('is_completed') == true)
                     $is_completed = "checked";     
            //Post values to array
            $data = array(             
                'task_name'    => $this->input->post('task_name'),
                'task_body'    => $this->input->post('task_body'),
                'due_date'     => $this->input->post('due_date'),
                'user_id'      => $user_id,
                'is_completed' => $is_completed
            );
           if($this->Task_model->edit_task($task_id,$data)){
                $this->session->set_flashdata('task_updated', 'Your task has been updated');
                //Redirect to index page with error aboves
                redirect('tasks');
           }
        }
    }
    
    
    public function mark_complete($task_id){
        if($this->Task_model->mark_complete($task_id)){
            $list_id = $this->Task_model->get_task_list_id($task_id);
            //Create Message
            $this->session->set_flashdata('marked_complete', 'Task has been marked complete'); 
            redirect('/lists/show/'.$list_id.'');
        }
    }
    
    
     public function mark_new($task_id){
        if($this->Task_model->mark_new($task_id)){
            $list_id = $this->Task_model->get_task_list_id($task_id);
            //Create Message
            $this->session->set_flashdata('marked_new', 'Task has been marked new'); 
            redirect('/lists/show/'.$list_id.'');
        }
    }
    
    
    public function delete($task_id){    
            //Delete list
            $this->Task_model->delete_task($task_id);
            //Create Message
            $this->session->set_flashdata('task_deleted', 'Your task has been deleted');        
            //Redirect to list index
            redirect("tasks");
     }
}