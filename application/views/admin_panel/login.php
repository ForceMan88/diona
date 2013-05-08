<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>media/admin/css/login.css" type="text/css" media="screen"/>
</head>
<body>

<div id="login_form">

    <h1>Please, Login!</h1>
    <?php echo form_open('admin_panel'); ?>
    <?php echo form_label('Login:', 'login');  ?>
    <?php echo form_input('login', set_value('login'));  ?>
    <?php echo form_label('Password:', 'password'); ?>
    <?php echo form_password('password', ''); ?>
    <?php echo form_submit('submit', 'Login'); ?>
    <?php echo form_close(); ?>
    <?php echo form_open('admin_panel'); ?>
    <div class=".error">
        <?php echo validation_errors(); ?>
    </div>
</div>


</body>
</html>