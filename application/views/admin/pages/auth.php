  <div class="container">
    <div class="row">
      <h3 class="center-align">Welcome to Morren-Xris Hotels!</h3>
      <p class="center-align flow-text">Enter the login details to view the dashboard</p>
    </div>
    <div class="login-form z-depth-3">
      <form method="post" action="<?php echo base_url(); ?>admin/auth/login">
        <div class="row">
          <div class="col s12">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email"/>
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