<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/assets/css/simple_sidebar.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default  navbar-fixed-top">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" href="#">My To Do List</a>
                    <a href="#" class="navbar-text" id="menu-toggle" role="button">Menu</a>
                </div>
                <!--RIGHT TOP CONTENT-->
                <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navbar-right">
                            <p class="navbar-text">Welcome,  {username}</p>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Lists</a></li> 
                        </ul>
                </div>
            </div><!--/.nav-collapse -->
        </nav>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Start Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">{side_bar_content}</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <br>
            <br>
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                                
                                {content}
                       
                                {main_content}
                            
                        </div>
                    </div>
                </div>
            </div>
        <!-- /#page-content-wrapper -->
            
    </div>
    <!-- /#wrapper -->

        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>

         <!-- Menu Toggle Script -->
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
    </body>
</html>
