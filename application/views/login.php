<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign In | 13 Years Guaranteed Education Program</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()."assets/favicon2.ico"?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?php echo base_url()."assets/css/gfonts.css"?>" rel="stylesheet" type="text/css">

    <!-- Material Icons -->
    <link href="<?php echo base_url()."assets/css/material-icons.css"?>" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()."assets/plugins/bootstrap/css/bootstrap.css"?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()."assets/plugins/node-waves/waves.css"?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()."assets/plugins/animate-css/animate.css"?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url()."assets/css/style.css"?>" rel="stylesheet">
    <style>
        body{
            background: url("<?php echo base_url()."assets/images/logo2.png"?>") left;
            background-size: 80%;
            background-repeat: no-repeat;
            max-width: unset;
        }
        .login-box{
            /*margin-right: 100px;*/
        }
    </style>
</head>

    <body class="login-page" style="margin-right:100px;">
        <div class="login-box" style="max-width: 360px;">
        <div class="logo">
            <a href="javascript:void(0);"><b>13 Years</b></a>
            <small> Guaranteed Education Program </small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('login/login_user'); ?>
                    <div class="msg">Sign in</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                <?php echo form_close()?>
                <a href="<?php echo base_url()."index.php/general"?>" target="_blank">View Schools Map</a>
            </div>
        </div>
    </div>



    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js"?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.js"?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()."assets/plugins/node-waves/waves.js"?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url()."assets/plugins/jquery-validation/jquery.validate.js"?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()."assets/js/admin.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/pages/examples/sign-in.js"?>"></script>
</body>

</html>
