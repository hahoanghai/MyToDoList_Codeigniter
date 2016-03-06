<div class="" id="loginModal">
  
  <div class="modal-body">
    <div class="well">
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="login">
          <form class="form-horizontal" action='login' method="POST">
            <fieldset>
              <div id="legend">
                <legend class="">Login</legend>
              </div>    
              <div class="form-inline form-group-sm row">
                <!-- Username -->
                <label class="col-sm-2 control-label"  for="username">Username</label>               
                  <input type="text" id="username" name="username" placeholder="username" class="form-control col-sm-10">            
              </div>
              <br>
              <div class="form-inline form-group-sm row">
                <!-- Password-->
                <label class="col-sm-2 control-label" for="password">Password</label>             
                  <input type="password" id="password" name="password" placeholder="password" class="form-control col-sm-10"> 
              </div>    
              <div class="control-group form-inline">
              <br>
                <!-- Button -->
                <div class="controls col-sm-12">
                  <button class="btn btn-success btn-sm" name = "submit" type="submit">Login</button>
                  <div class="text-danger form-control-static">{error}<a href="register"> Click here to register</a></div>
                </div>
              </div>
            </fieldset>
          </form>                
        </div>
      </div>
    </div>
  </div>
</div>
