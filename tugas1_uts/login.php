<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_assoc($query);

    if($data){
        $_SESSION['user'] = $data;
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Login gagal</div>";
    }
}
?>

<form method="POST">
  <div class="mb-3">
    <label>Username</label>
    <input type="text" name="username" class="form-control">
  </div>

  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" name="login" class="btn" style="background-color: #5edf6b; color: white;">Login</button>
  <div class="mt-3">
    <small class="text-muted">
        👤 Admin: <strong>sahrul</strong> / <strong>180525</strong>
    </small><br>
    <small class="text-muted">
        👤 User: <strong>doan</strong> / <strong>040807</strong>
    </small>
  </div>

</form>