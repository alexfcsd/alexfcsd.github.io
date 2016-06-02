<?php require_once 'init.php'; ?>
<!DOCTYPE html>
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

<?php include 'components/navbar.php';?>

<br>
<br>
<div class="container">
    <div class="page-header">
        <h1>Оберіть параметр</h1>
    </div>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <div class="col-sm-10  col-lg-4 col-md-8">
                <div class="row">
                    <div class="col-xs-6">
                        <select name="param" id="param" class="form-control">
                            <option id="0" value="0">Оберіть категорію</option>
                            <option id="1" value="1">Освітлення</option>
                            <option id="2" value="2">Шум</option>
                            <option id="3" value="3">Мікроклімат</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: none;"id="first">
            <div class="page-header">
                <h3>Розміри приміщення, м<sup>2</sup>:</h3>
            </div>

            
            <br>
            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">-довжина</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>


            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">-ширина</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>


            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">-висота</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>

            <div class="page-header">
                <h3>Кількість робочих:</h3>
            </div>

            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">Кількість робочих</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>

            <div class="page-header">
                <h3>Розміри форточки:</h3>
            </div>

            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">Площа форточки, м<sup>2</sup></label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>


            <div class="page-header">
                <h3>Температура:</h3>
            </div>

            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">Всередині, С</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>
            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">Зовні, С</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>


      
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-primary" href="computing.php">Розрахувати</a>
               </div>
            </div>
        </div>


        <div style="display: none;" id="third">
            <div class="page-header">
                <h3>3, м<sup>2</sup>:</h3>
            </div>

            <div class="form-group">
                <label for="inputUmol3" class="col-sm-2 control-label">-third</label>
                <div class="col-sm-10  col-lg-6  col-md-8">
                    <input type="text" class="form-control" id="inputUmol3" placeholder="Умова">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <form>
                        <input type="button" class="btn btn-primary" value="Розрахувати" onclick="location.href='computing.html'" />
                    </form> 
                    
                </div>
            </div>
        </div>
    </form>

</div>

</body>
</html>




<!-- <form  method="post" action="" class="navbar-form navbar-right hidden-sm hidden-md ">

                <div class="form-group">
                     <input name="entermail" type="text" class="form-control" placeholder="E-mail" >
                </div>

                    <div class="form-group">
                         <input name="enterpass" type="password" class="form-control" placeholder="Password" >
                    </div>

                    <input type="hidden" name="enter"></input>

                    <button type="submit" name="enter" class="btn btn-primary">
                        <i class="fa fa-sign-in"></i>&nbsp;Sign in
                    </button>
                    <button type="submit" name="up" class="btn btn-success" >
                        Sign up
                    </button>
                    
                    
                </form> -->