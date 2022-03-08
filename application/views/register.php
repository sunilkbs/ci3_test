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
  <h1><?php echo $this->session->flashdata('message'); ?></h1>
<div class="container">
<form id="form" method="post" action="<?php echo $base_url;?>/Users/savedata">
  <div class="heading"><h3>Registration Page</h3></div>

  <div class="form-group">
    <label for="firstName">First Name:</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
  </div>

    <div class="form-group">
    <label for="lastName">Last Name:</label>
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>

  <div class="form-group">
    <label for="confirmPassword">Confirm Password</label>
    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
   $("#form").validate({
      rules: {
        firstName: {
          require:true,
        },
         lastName:{
          require:true,
         },
         email: {
          require:true,
          email:true,
        },
         password:{
          require:true,
         },
         confirmPassword:{
           require:true,
           equalTo: "#password"
         }
      },
   });
});
</script>

</body>
</html>