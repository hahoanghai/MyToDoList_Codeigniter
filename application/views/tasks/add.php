<div class="container">
        <div class="well">
              
              <form class="form-horizontal" action='add' method="POST">
                <fieldset>
                      <div id="legend">
                        <legend class="">Add New Task</legend>
                      </div>   
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Task Name</label>
                            <input type="text" value="{taskname}" class="col-md-6 form-control" name="task_name">
                            <div class="text-danger  col-md-4 small">{taskname_error}</div>
                      </div>
                      <br>
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Task Content</label>
                            <textarea value="{taskbody}" class="col-md-6 form-control" rows="4" name ="task_body"></textarea>
                            <div class="text-danger col-md-4 small">{taskbody_error}</div>
                      </div>
                      <br>
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Due Date</label>
                            <input type="date" value="{duedate}" class="col-md-6 form-control" name ="due_date">
                            <div class="text-danger col-md-4 small">{duedate_error}</div>
                      </div>
                      <br>
                      <div class="control-group form-inline">
                        <div class="controls col-sm-12">
                          <button class="btn btn-primary btn-sm">Add Task</button>
                        </div>
                      </div>
                </fieldset>
              </form>
        </div>
</div>