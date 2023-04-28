<?php 
    // echo "Passwort-Login Test!";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'peter.muster' && $password === '123') {
        echo "<h2>Login erfolgreich!</h2>";
        echo "<p>Hallo Peter</p>";
    }
    else {
        echo "<h2>Benutzername oder Passwort ungültig!</h2>";
    }
?>  
