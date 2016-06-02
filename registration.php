<?php
require_once 'init.php';





mysql_close();
?>

<html>


<head>
<meta charset="UTF-8"/>
<meta name="theme-color" content="#CAE6D4"/>
<meta  name= "apple-mobile-web-app-capable"  content= "yes" > 
<meta  name= "apple-mobile-web-app-status-bar-style"  content= "black-translucent" >
<title>Diploma</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">

<style>

</style>
<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>


<body id="size">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include "components/navbar.php"; ?>


<br>


<div class="container">
     <div class="page-header">
          <h1>Registration<small> you can register here</small></h1>
     </div>

     <form action="registration.php" method="post" class="form-horizontal" role="form">
          <div class="form-group">
               <label for="inputName3" class="col-sm-2 control-label">
                    Name Surname
               </label>
               <div class="col-sm-10  col-lg-6 col-md-8">
                    <div class="row">
                         <div class="col-xs-6">
                              <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Name" >
                         </div>
                         <div class="col-xs-6">
                              
  								<input name="usersurname" type="text" class="form-control" id="inputEmail3" placeholder="Surname" >
                         </div>
                    </div>
               </div>
          </div>    

          <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
               <div class="col-sm-10  col-lg-6  col-md-8">
                    <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" >
               </div>
          </div>
          <div class="form-group">
               <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
               <div class="col-sm-10  col-lg-6  col-md-8">
                    <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" >
                    <span id="helpBlock" class="help-block">The password must be at least 8 characters</span>
               </div>
          </div>
  
          <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                   <input type="submit" name="submit" value="Sign up" class="btn btn-success">
               </div>
          </div>
     </form>

</div>

</body>
</html>
