<?php include('header.php'); 
if (isset($_POST['btn-login'])) {
//echo "<pre>";
//print_r($_REQUEST);
//print_r($_POST);
  if ($_POST['username'] == "Tops" && $_POST['password'] == "123") { 
    $_SESSION['userdata'] = array("username"=>"Tops","Location"=>"SG Highway");
    ?>
    <script>
        alert('Login success')
        window.location.href = "dashboard.php";
    </script>
<?php 
}else{
    echo  "<script>alert('invalid user')<script>";
    
  }
}
    echo"</pre>";
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
        <div class="card border-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">Login</div>
  <div class="card-body">
    <form method="post">
   <div class="row mt-3">
    <div class="col">
        <input type="text" class="form-control" placeholder="enter user name" name="username" id="username">
    </div>
   </div>
   <div class="row mt-3">
    <div class="col">
        <input type="text" class="form-control" placeholder="enter password" name="password" id="password">
    </div>
   </div>
   <div class="row mt-3">
    <div class="col">
        <input type="Submit" class="btn btn-primary" name="btn-login" id="btn-login" value="login">
    </div>
   </div>
   </form>
  </div>
</div>
        </div>
    </div>
</div>