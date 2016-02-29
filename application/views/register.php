<div class="" id="loginModal">
  <div class="modal-header">
    <h3>Have an Account?</h3>
  </div>
  <div class="modal-body">
    <div class="well">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#create" data-toggle="tab">Create Account</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="create">
        <br>
          
          <form class="form-horizontal" action='users/register' method="POST" id="tab">
            <fieldset>
              <?php echo validation_errors('<p class="text-error">'); ?>
              <div id="legend">
                <legend class="">Create Account</legend>
              </div>   
                  <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">Username</label>
                        <input type="text" value="" class="form-control" name="username" placeholder="username">
                  </div>
                  <br>
                  <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">First Name</label>
                        <input type="text" value="" class="form-control" name ="first_name" placeholder="first name">
                  </div>
                  <br>
                  <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">Last Name</label>
                        <input type="text" value="" class="form-control" name ="last_name" placeholder="last name">
                  </div>
                  <br>
                  <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">Email</label>
                        <input type="text" value="" class="form-control" name ="email" placeholder="email address">
                  </div>
                <br>
                <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">Password</label>
                        <input type="password" value="" class="form-control" name ="password" placeholder="password">
                  </div>
                <br>
                <div class="form-inline form-group-sm">
                        <label class="col-sm-2 control-label">Confirm Password</label>
                        <input type="password" value="" class="form-control" name ="password2" placeholder="confirm password">
                  </div>
                <br>
                <div class="control-group">
                  <div class="controls col-sm-2">
                    <button class="btn btn-primary btn-sm">Create Account</button>
                  </div>
                </div>
              </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>