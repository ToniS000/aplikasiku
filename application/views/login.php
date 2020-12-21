<div class="login-logo">
  <a href="<?php echo base_url() ?>"><b>Aplikasi</b>KU</a>
</div>
<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?php echo base_url() ?>login/cek_login" method="post">
      <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-card-body -->
</div>