<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Philtech LMS</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/home/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/page/pages/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/home/modalLogin.css">
</head>

<body>

    
    <header class="header-area">
        <div class="clever-main-menu">
            <div style="background-image: linear-gradient(to bottom right, maroon, #fffdd0);" class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">
                    <a class="nav-brand" href="#"><em style="font-style: normal;color:white;font-size: 32px; text-shadow: 2px 2px black;"><b>PhilTech</b></em><b style="text-shadow: 2px 2px black;color: #00FFFF; font-size: 38px;">-LMS</b></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div style="background-image: linear-gradient(to bottom right, maroon, #fffdd0);" class="classy-menu">

                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <div class="classynav">
                            <div  class="register-login-area">
                                <a class="btn btn-block active" data-toggle="modal" data-target="#myModal">Login</a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </header>


<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img  style="width: 20vh; height: 20vh;" src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Avatar">
                </div>              
                <h4 class="modal-title"></h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>user/login" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" placeholder="Username" required="required">     
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required"> 
                    </div>        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                    </div>
                </form>
            </div>
            <style type="text/css">
                .modal-footer a:hover{
                    color: blue;
                    font-weight: bold;
                    font-size: 16px;
                }
            </style>
            <div class="modal-footer">
                <a href="<?php echo base_url(); ?>pages/register/registration" class="link">Create Account</a>/ <a data-dismiss="modal" data-toggle="modal" data-target="#forgotpass" class="link"> Forgot Password?</a>
            </div>
        </div>
    </div>
</div>     

<div id="forgotpass" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                   <!--  <img  style="width: 20vh; height: 20vh;" src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Avatar"> -->
                </div>              
                <h4 class="modal-title">Forgot Password</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>pages/forgotpass" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" placeholder="Enter Fullname" required="required">     
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="stud_id" placeholder="Enter Student ID" required="required"> 
                    </div>        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Submit</button>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div> 