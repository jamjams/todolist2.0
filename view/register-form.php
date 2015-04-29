<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<head>
        <title>-Jah'melah's To-Do List-</title>

        <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<h1><center>Register</center></h1>

<p><center>Login if already a registered user <a href="login.php">HERE</a> or go <a href="home.php">HOME</a>.
</center></p>

<form method="POST" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <label for="email" class="email">E-mail: </label>
        <input type="text" name="email"/>
    </div>
    
    <div>
        <label for="username" class="usernamereg">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password" class="passwordreg">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <button type="submit" class="register">Register!</button>
    </div>
</form>

