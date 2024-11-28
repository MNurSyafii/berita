<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Web Berita Elskanza</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-login {
      background: #ffffff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .form-login h1 {
      margin-bottom: 1.5rem;
      font-weight: bold;
      color: #004f9a;
    }
    .form-control {
      margin-bottom: 1rem;
      height: 45px;
      font-size: 1rem;
      border-radius: 6px;
    }
    .btn-primary {
      background-color: #004f9a;
      border: none;
      font-size: 1rem;
      padding: 10px 15px;
      border-radius: 6px;
      width: 100%;
    }
    .btn-primary:hover {
      background-color: #00397a;
    }
    .form-footer {
      margin-top: 1.5rem;
      font-size: 0.9rem;
    }
    .form-footer a {
      color: #004f9a;
      text-decoration: none;
    }
    .form-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <form method="post" action="" class="form-login">
    <h1 class="text-center">Login</h1>
    <label for="username" class="visually-hidden">Email/Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Email or Username" required autofocus>
    <label for="pass" class="visually-hidden">Password</label>
    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
    <button type="submit" name="btnSubmit" class="btn btn-primary">Login</button>
    <div class="form-footer text-center">
    </div>
  </form>

  <?php
    if(isset($_POST['btnSubmit'])){
      include 'koneksi.php';
      $pass  = md5($_POST['pass']);

      $cek=mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$_POST[username]'AND password='$pass'");

      $data = mysqli_fetch_array($cek);
      $result = mysqli_num_rows($cek);
      if($result==1){
        session_start();
        $_SESSION['user']=$data['username'];
        $_SESSION['iduser']=$data['id'];
        $_SESSION['level']=$data['level'];

        header('location:index.php');
      }
      else
        echo "<script>alert('Username dan password Invalid')</script>";
    }
  ?>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
