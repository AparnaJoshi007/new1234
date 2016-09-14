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
       <h3>Beverages</h3>
<br>

<?php
$fname = "beverages.json";
readjson($fname);
?>
</div>

</div>

</div>
<!-- /.row -->

<!-- Projects Row -->
<!-- /.row -->

 




        <hr>

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
