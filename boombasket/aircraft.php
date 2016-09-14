<?php
session_start();
include 'allfunctions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
    <title>Boombasket</title>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="category.js"> </script>
    <!-- Custom CSS -->
    <link href="css/2-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
 <?php
    mylogin();
?>
                <a class="navbar-brand" href="index.php" style="color:#fff; font-weight:bold" >Boombasket.com</a>

            </div>
            <div style="float:right; " >
            <ul class="nav navbar-nav">
            <li>
                <?php
mycount();
?>
            </li>
        </ul>
        </div>

        <form class="navbar-form navbar-right" action= "javascript:searcha()">
            <div class="input-group">
              <input type="text" id="query" placeholder="Search" class="form-control">
            
           <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        
             
        
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
         
    </nav>
<div id="heading">
</div>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        
        <!-- /.row -->
<div id="searchlist">
        <!-- Projects Row -->
       <h3>Aircrafts and Helicopters</h3>
<br><br>

<form action="addcartaircraft.php" method="post">
    <h4>MIG 21</h4>
    <img src="images/aircraft/MIG21.jpg" style="float:left;" height="220" width="320"></img>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_MIG21.900"> Buy whole kit, Price: &#8377;900<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_MIG21-Body.300"> Body, Price: &#8377;300<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_MIG21-Wings.200"> Wings, Price: &#8377;200<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_MIG21-Ailerons.50"> Ailerons, Price: &#8377;50<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_MIG21-Flaps.50"> Flaps, Price: &#8377;50<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_MIG21-Verticalstabilizer.150"> Vertical stabilizer, Price: &#8377;150<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_MIG21-Horizontalstabilizer.150"> Horizontal stabilizer, Price: &#8377;150<br><br>
    &nbsp;&nbsp;

  <input type='submit' value='Add to cart' class='btn btn-default' style= 'background-color : #33ACFF; color : #fff;'>
            
</form>
<br><br>
<form action="addcartaircraft.php" method="post">
    <h4>Kiran</h4>
    <img src="images/aircraft/Kiran.jpg" style="float:left;" height="220" width="320"></img>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran.1300"> Buy whole kit, Price: &#8377;1300<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Body.300"> Body, Price: &#8377;300<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Wings.200"> Wings, Price: &#8377;200<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Ailerons.50"> Ailerons, Price: &#8377;50<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Flaps.50"> Flaps, Price: &#8377;50<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Verticalstabilizer.150"> Vertical stabilizer, Price: &#8377;150<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Kiran-Horizontalstabilizer.150"> Horizontal stabilizer, Price: &#8377;150<br><br>
    &nbsp;&nbsp;

  <input type='submit' value='Add to cart' class='btn btn-default' style= 'background-color : #33ACFF; color : #fff;'>
            
</form>
<br><br>
<form action="addcartaircraft.php" method="post">
    <h4>Canberra</h4>
    <img src="images/aircraft/Canberra.jpg" style="float:left;" height="220" width="320"></img>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Canberra.1300"> Buy whole kit, Price: &#8377;300<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Canberra-Body.500"> Body, Price: &#8377;500<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Canberra-Wings.300"> Wings, Price: &#8377;300<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Canberra-Ailerons.50"> Ailerons, Price: &#8377;50<br>
    &nbsp;&nbsp;
<input type="checkbox" name="aircraft[]"  value="aircraft_Canberra-Flaps.50"> Flaps, Price: &#8377;50<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]"  value="aircraft_Canberra-Verticalstabilizer.250"> Vertical stabilizer, Price: &#8377;250<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Canberra-Horizontalstabilizer.150"> Horizontal stabilizer, Price: &#8377;150<br><br>
    &nbsp;&nbsp;

  <input type='submit' value='Add to cart' class='btn btn-default' style= 'background-color : #33ACFF; color : #fff;'>
            
</form>

<br><br>
<form action="addcartaircraft.php" method="post">
    <h4>Dhruv</h4>
    <img src="images/aircraft/Dhruv.jpg" style="float:left;" height="220" width="320"></img>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv.1350"> Buy whole kit, Price: &#8377;1350<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Body.400"> Body, Price: &#8377;400<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Mainrotor.300"> Main rotor blade, Price: &#8377;300<br>
    &nbsp;&nbsp; 
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Tailrotor.200"> Tail rotor, Price: &#8377;200<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Rotormast.150"> Rotor mast, Price: &#8377;150<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Cockpit.100"> Cockpit, Price: &#8377;100<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Dhruv-Skids.100"> Landing skids, Price: &#8377;100<br><br>
    &nbsp;&nbsp;
  <input type='submit' value='Add to cart' class='btn btn-default' style= 'background-color : #33ACFF; color : #fff;'>
            
</form>

<br><br>
<form action="addcartaircraft.php" method="post">
    <h4>Pushpak</h4>
    <img src="images/aircraft/Pushpak.jpg" style="float:left;" height="220" width="320"></img>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak.1150"> Buy whole kit, Price: &#8377;1150<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Body.350"> Body, Price: &#8377;350<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Wings.200"> Wings, Price: &#8377;200<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Ailerons.200"> Ailerons, Price: &#8377;200<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Flaps.150"> Flaps, Price: &#8377;150<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Verticalstabilizer.100"> Vertical Stabilizer, Price: &#8377;100<br>
    &nbsp;&nbsp;
    <input type="checkbox" name="aircraft[]" value="aircraft_Pushpak-Horizontalstabilizer.150"> Horizontal Stabilizer, Price: &#8377;150<br><br>
    &nbsp;&nbsp;

  <input type='submit' value='Add to cart' class='btn btn-default' style= 'background-color : #33ACFF; color : #fff;'>
            
</form>


</div>

</div>

</div>
<!-- /.row -->

<!-- Projects Row -->
<!-- /.row -->

 




      

        <!-- Pagination -->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; You have been boombasketed</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

   

</body>

</html>
