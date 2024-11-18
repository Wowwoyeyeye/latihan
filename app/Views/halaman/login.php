<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>

<div class="login-container">
  <h2>Login</h2>
  <form>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3">Log In</button>
    <div class="text-center mt-3">
      <a href="#">Forgot password?</a>
    </div>
    <div class="text-center mt-2">
      <p>Don't have an account? <a href="#">Create one</a></p>
    </div>
  </form>
</div>
<?= $this->endSection(); ?>