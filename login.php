<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    Login();
}

function Login()
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $internalPassword = "123";
    $internalUser = "peter.muster";

    if ($username === $internalUser && $password === $internalPassword) 
    {
        header("location: AnmeldeFormular.html");
    }
    else {
        echo "<h2>Falsches Passwort oder falscher Benutzername. 
        Bitte versuchen Sie es nochmal.</h2>";
    }
}
?>  
