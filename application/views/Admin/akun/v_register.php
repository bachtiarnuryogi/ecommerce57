<html>
<head>
<style>
    body {
     background-image: url("<?php echo base_url('gambar/b.jpg')?>");
     background-color: #cccccc;
    }
    input[type=text],[type=password]{
        width:100%;
        padding:6px 6px;
        margin: 10px 0;
        color: #f2f2f2;
      }
      a:link {
      color: #1f9fc2;
      text-decoration: none;
    }
    a:visited {
      color: #1f9fc2;
    }
    a:hover {
      color: #024d61;
    }
    a:active {
      color: #024d61;
    }
  </style>
  <title>Register - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap.min.js')?>"></script>
  
<body>
  <div class="login">
    <center><h2><font font size="5" color="#f2f2f2">Register <b>Admin</b></font></h2></center> 
    <br>
    <form action="<?php echo base_url('Admin/register'); ?>" method="post" onSubmit="return validasi()">
      <div>
        <label class="text-white">Username:</label>
          <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" 
          placeholder="Username">
      </div>
      <div>
        <label class="text-white">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"
          placeholder="Email">
      </div>
      <div>
        <label class="text-white">Password:</label>
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"
          placeholder="Password">
      </div>
      <div>
        <label class="text-white">re-Password:</label>
          <input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"
          placeholder="Retype password">
      </div>
        <div class="icheck-primary">
          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
          <label for="agreeTerms" class="text-white">
          Saya setuju
         </label>
       </div>    
      <div>
        <br>
            <button type="submit" class="btn btn-primary btn-block">Register</button><br>
      </div>
      <div>
        <font color="f2f2f2">Sudah Memiliki Akun?</font><a href="<?php echo base_url('Admin/login'); ?>"> &nbsp;Login
      </div>
    </form>
  </div>
</body>
 
<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;   
    if (username != "" && password!="") {
      return true;
    }else{
      alert('Username Atau Password Tidak Boleh Kosong !');
      return false;
    }
  }
 
</script>
</html>