<!DOCTYPE HTML>
<html>
<head>
    <title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="applijewelleryion/x-javascript">
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="<?php echo URL ?>css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>

    <script src="<?php echo URL ?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo URL ?>js/bootstrap.min.js"></script>
    <script src="<?php echo URL ?>js/script.js"></script>
    <link href="<?php echo URL ?>css/style.css" rel='stylesheet' type='text/css'/>
    <!-- animation-effect -->
    <link href="<?php echo URL ?>css/animate.min.css" rel="stylesheet">
    <script src="<?php echo URL ?>js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->

    <script>
        $('#myModal').modal();
    </script>
</head>
<body>
<div class="header" id="ban">
    <div class="container">
        <div class="row">
            <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <div class="header-search">
                    <div class="search">
                        <input class="search_box" type="checkbox" id="search_box">
                        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
                                                                          aria-hidden="false"></span></label>
                        <div class="search_form">
                            <form action="#" method="post">
                                <input type="text" name="Search" placeholder="Search...">
                                <input type="submit" value="Send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-7" id="link-effect-7">
                            <ul class="nav navbar-nav">
                                <li class="active act"><a href="<?php echo URL ?>">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="<?php echo URL ?>blog/travel">Travel</a></li>
                                <li><a href="fashion.html">Fashion</a></li>
                                <li><a href="music.html">Music</a></li>
                                <li><a href="codes.html">Codes</a></li>


                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <ul>
                    <li><a href="#"> </a></li>
                    <li><a href="#" class="pin"> </a></li>
                    <li><a href="#" class="in"> </a></li>
                    <li><a href="#" class="be"> </a></li>
                    <li><a href="#" class="vimeo"></a></li>
                </ul>
            </div>
            <div class="login wow fadeInRight animated animated"  data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                <li id="username">
                    <?php
                    if (isset($_SESSION['login']))
                    {
                        echo "<div class='btn-group logout'> <button type='button' class='btn button_logout'>". "Xin chào: " . $_SESSION['username']."</button> 
                            <button type= 'button' class='btn button_logout dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                            <span class='caret'></span> <span class='sr-only'>Toggle Dropdown</span></button> 
                            <ul class='dropdown-menu menu_user'> 
                            <li><a href='#' onclick= 'logout()' >Logout</a></li> 
                            <li><a href='#' >aaaaaaaa</a></li> </ul> </div>";
                    }
                    else
                    {
                        echo "<a class='btn button_login' data-toggle='modal' data-target='#myModal'>Login</a>";
                    }
                    ?>

                </li>
            </div>
        </div>

    </div>
</div>
<!--start-main-->
<div class="header-bottom">
    <div class="container">
        <div class="logo wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
            <h1><a href="index.html">STYLE BLOG</a></h1>
            <p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="overlay-loader">
            <div class="loader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - <a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <p class="errorLog" style="color: #990000; text-align: center;"></p>
                                <form role="form" class="form-horizontal" action="">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="usernameLog" placeholder="Email"
                                                   name="email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="passwordLog"
                                                   placeholder="Email" name="password"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary btn-sm" onclick="login()">
                                                Login
                                            </button>
                                            <a href="<?php echo URL ?>/admin">Admin login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <p class="error" style="color: #990000; text-align: center;"></p>
                                <form role="form" class="form-horizontal">

                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="namerg" placeholder="Username"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="emailrg" placeholder="Email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="passwordrg"
                                                   placeholder="Password"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary btn-sm" onclick="register()">
                                                Register
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>