<!DOCTYPE HTML>
<html>
<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


<style>
  form#form {
    width: 40%;
    margin: auto;
    padding: 20px;
}
.error{
  color: red;
}

</style>

</head>
<body>

<?php echo form_error('email'); ?>


<div class="container">

<form id="form" method="post" action="<?php echo $base_url;?>/Users/loginLogic">
  <div class="heading"><h3>Login Page</h3></div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
   $("#form").validate({
      rules: {
         email: {
          require:true,
        },
         password:{
          require:true,
         }
      },
   });
});
</script>

</body>
</html>