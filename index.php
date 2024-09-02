<?php

session_start(); // Start the session
require 'config/config.php'; // Include the database configuration file

if (isset($_POST['submit'])) {
  // Retrieve form data
  $usernameOrEmail = trim($_POST['username_or_email']);
  $password = trim($_POST['password']);

  // Input validation
  if (empty($usernameOrEmail) || empty($password)) {
    echo "Both fields are required!";
    exit();
  }

  // Prepare a SQL statement to find the user by username or email
  $stmt = $pdo->prepare("SELECT * FROM `admin` WHERE username = :username OR email = :email LIMIT 1");
  $stmt->execute(['username' => $usernameOrEmail, 'email' => $usernameOrEmail]);
  $admin_user = $stmt->fetch();

  if ($admin_user) {
    // Verify the password
    // if (password_verify($password, $admin_user['password'])) {
    if ($password === $admin_user['password']) {
      // Password is correct, set session variables
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['logged_in'] = true;

      // Redirect to a secure page or dashboard
      header("Location: pages/dashboard.php");
      exit();
    } else { ?>
      <div class="alert alert-primary" role="alert">
        <strong>Login Failed!</strong> Invalid Password.
      </div>
<?php }
  } else {
    echo "No user found with that username or email!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-start mb-3">Login</h3>
              <form action="" method="post">
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" name="username_or_email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="text" name="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center d-grid gap-2">
                  <button type="submit" name="submit" href="dashboard.html"
                    class="btn btn-primary btn-block enter-btn mb-3">Login</button>
                </div>
                <div class="d-flex">
                  <button class="btn btn-facebook me-2 col">
                    <i class="mdi mdi-facebook"></i> Facebook </button>
                  <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div>
                <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>