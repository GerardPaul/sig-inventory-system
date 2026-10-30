<!DOCTYPE html>
<html>
    <head>
        <title>SIG Inventory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "css/styles.css" rel = "stylesheet">
        <link rel="stylesheet" href="js/jquery-ui-1.10.3/themes/base/jquery-ui.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>
    <body>
 
        <div class = "navbar navbar-inverse navbar-fixed-top">
            <div class = "navbar-inner">
                <div class = "container">
                    <div class="navbar-header">
                        <a href = "index.php" class = "navbar-brand">SIG Inventory System</a>
                        <button type='button' class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                        </button>
                    </div>
                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <?php if(isset($_SESSION['username'])&&isset($_SESSION['password'])){ ?>
                        <ul class = "nav navbar-nav ">
                            <li class = "active"><a href = "index.php">Home</a></li>
                            <!--<li><a href = "" onclick="logout()">Logout</a></li>
                            <li><a href = "#sign_in"  data-toggle="modal" >Sign In</a></li> -->
                        </ul>
                        
                        <form class="navbar-form navbar-right" role="search" method="post" action="index.php">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm " placeholder="Search..." name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-danger btn-sm" type="submit" name="search"><span class="fa fa-search"></span></button>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                        
                        <!--<form class="nav navbar-form navbar-right" role="search">
                          <div class="form-group ">
                            <input class="form-control input-sm " placeholder="Search..." type="text">
                          </div>
                          <button type="submit" class="btn btn-danger btn-sm">
                            <span class="fa fa-search"></span>
                          </button>
                        </form>-->
                    </div>
                </div>
            </div>
        </div>
        <!--- center contents -->
