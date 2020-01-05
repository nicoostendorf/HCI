<?php
$errmsg = '';
$flag = false;
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $errmsg .= 'Bitte einen Benutzernamen und ein Passwort eingeben!<br>';
        $flag = true;
     }
    if ($flag === false) {
        $errmsg = 'Diese Zugangsdaten sind ungültig!';
    }
}
?>
<html>
    <head>
        <title>Fakelogin</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <style type="text/css">
            #login {
                width: 100%;
                margin: 0 auto;
                text-align: center;
            }
            #logo {
                width: 480px;
                height: 320px;
                margin-top: 5%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                background: url('logo.png');
            }
        </style>
    </head>
    <body>
        <div id="login">
            <div id="logo"></div>
            <form action="index.php" method="post">
                Benutzername:<br>
                <input type="text" name="username" value="" size="25"><br><br>
                Passwort:<br>
                <input type="text" name="password" value="" size="25"><br><br>
                <input type="submit" name="submit" value="Login">
            </form>
            <br>
            <?php echo '<font color="#FF0000">'.$errmsg.'</font>'; ?>
        </div>
    </body>
</html>