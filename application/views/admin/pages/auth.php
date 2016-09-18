  <div class="container">
    <div class="row">
      <h3 class="center-align">Welcome to Morren-Xris Hotels!</h3>
      <p class="center-align flow-text">Enter the login details to go view dashboard</p>
    </div>
    <div class="login-form z-depth-3">
      <form method="post" action="<?php echo base_url(); ?>/admin/auth/check_auth">
        <div class="row">
          <div class="col s12">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username"/>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <label for="username">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password"/>
          </div>
        </div>
        <div class="row" id="login-button">
            <button class="btn waves-effect waves-light" id="submit" type="submit" name="submit">Login
            </button>
          </div>
      </form>
    </div>
  </div>