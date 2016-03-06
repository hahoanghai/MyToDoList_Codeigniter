<div class="" id="loginModal">
  <div class="modal-body">
    <div class="well">
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="create">
          
          <form class="form-horizontal" action='register' method="POST" id="tab">
            <fieldset>
                  <div id="legend">
                    <legend class="">Create Account</legend>
                  </div>   
                  <div class="form-inline form-group-sm row">
                        <label class="col-sm-2 control-label">Username</label>
                        <input type="text" value="" class="col-sm-5 form-control" name="username" placeholder="username">
                        <div class="text-danger  col-sm-5 small">{username_error}</div>
                  </div>
                  <br>
                  <div class="form-inline form-group-sm row">
                        <label class="col-sm-2 control-label">First Name</label>
                        <input type="text" value="" class="col-sm-5 form-control" name ="first_name" placeholder="first name">
                        <div class="text-danger col-sm-5 small">{firstname_error}</div>
                  </div>
                  <br>
                  <div class="form-inline form-group-sm row">
                        <label class="col-sm-2 control-label">Last Name</label>
                        <input type="text" value="" class="col-sm-5 form-control" name ="last_name" placeholder="last name">
                        <div class="text-danger col-sm-5 small">{lastname_error}</div>
                  </div>
                  <br>
                  <div class="form-inline form-group-sm row">
                        <label class="col-sm-2 control-label">Email</label>
                        <input type="text" value="" class="col-sm-5 form-control" name ="email" placeholder="email address">
                        <div class="text-danger col-sm-5 small">{email_error}</div>
                  </div>
                  <br>
                  <div class="form-inline form-group-sm row">
                          <label class="col-sm-2 control-label">Password</label>
                          <input type="password" value="" class="col-sm-5 form-control" name ="password" placeholder="password">
                          <div class="text-danger col-sm-5 small">{password_error}</div>
                    </div>
                  <br>
                  <div class="form-inline form-group-sm row">
                          <label class="col-sm-2 control-label">Confirm Password</label>
                          <input type="password" value="" class="col-sm-5 form-control" name ="password2" placeholder="confirm password">
                          <div class="text-danger col-sm-5 small">{repassword_error}</div>
                    </div>
                  <br>
                  <div class="control-group form-inline">
                    <div class="controls col-sm-12">
                      <button class="btn btn-primary btn-sm">Create Account</button>
                      <div class="text-danger form-control-static">Already had account ? <a href="index">Login to use</a></div>
                    </div>
                  </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>