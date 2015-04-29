<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<head>
        <title>-Jah'melah's To-Do List-</title>

        <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<h1><center>-LOGIN-</center></h1>

<p><center>Haven't registered yet? Go <a href="register.php">HERE</a> 
</center></p>

<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div>
        <label for="username" class="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password" class="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <input type="hidden" name="login" value="login" />
        <button type="submit" class="login">LOGIN</button>
    </div>
</form>

