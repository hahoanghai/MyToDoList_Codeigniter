<div class="container">
        <div class="well">
              
              <form class="form-horizontal" action='{id}' method="POST">
                <fieldset>
                      <div id="legend">
                        <legend class="">Edit This Task</legend>
                      </div>   
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Task Name</label>
                            <input type="text" value="{taskname}" class="col-md-6 form-control" name="task_name">
                            <div class="text-danger  col-md-4 small">{taskname_error}</div>
                      </div>
                      <br>
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Task Content</label>
                            <textarea class="col-md-6 form-control" rows="4" name ="task_body">{taskbody}</textarea>
                            <div class="text-danger col-md-4 small">{taskbody_error}</div>
                      </div>
                      <br>
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Due Date</label>
                            <input type="date" value="{duedate}" class="col-md-6 form-control" name ="due_date">
                            <div class="text-danger col-md-4 small">{duedate_error}</div>
                      </div>
                      <br>
                      <div class="form-inline form-group-sm row">
                            <label class="col-md-2 control-label">Is Done ??</label>
                            <input type="checkbox" class="col-md-6 form-control" name ="is_completed" {isdone}>
                      </div>
                      <br>
                      <div class="control-group form-inline">
                        <div class="controls col-sm-12">
                          <button type="submit" class="btn btn-primary btn-sm">Edit Task</button>
                        </div>
                      </div>
                </fieldset>
              </form>
        </div>
</div>