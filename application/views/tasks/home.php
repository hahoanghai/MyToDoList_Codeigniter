<div class = "container">
	<div class = "jumbotron">
		 <h4><a href="tasks/add">Add New Task</a></h4>
		 <div class="panel panel-success">
		            <!-- Default panel contents -->
		            <div class="panel-heading">This is your task</div>

		            <table class="table">
		                <tr>
		                    <th>Task Name</th>
		                    <th>Content</th>
		                    <th>Due Date</th>
		                    <th>Is Done</th>
		                    <th>Action</th>
		                </tr>
		                {tasks}
		                <tr>
		                    <td>{task_name}</td>
		                    <td>{task_body}</td>
		                    <td>{due_date}</td>
		                    <td> 
				     <input type="checkbox" value="" disabled {is_completed}>
			       </td>
		                     <td>
				 <a href="tasks/edit/{id}">Edit</a>
				 <a onclick="return confirm('You are going to delete this task. Are you sure?')" href="tasks/delete/{id}">Delete</a>
		                     </td>
		                </tr>
		                {/tasks}
		            </table>
		        </div>
		    </div>