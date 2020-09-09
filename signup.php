<html>

    <head>
        <title>Sign Up Page</title>
        <style>
        input {
            display: block;
        }
        </style>
    </head>

    <body>
        <h1>Sign Up</h1>
        <form>
            <input type="text" name="voornaam" placeholder="Voornaam" required>
            <input type="text" name="tussenvoegsel" placeholder="Tussenvoegsel">
            <input type="text" name="achternaam" placeholder="Achternaam" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
            <input type="password" name="hwachtwoord" placeholder="Herhaal Wachtwoord" required>
            <input type="submit" value="sign up">
        </form>
        <a href="lostpwd.php">lost password?</a><br>
        <a href="signup.php">Al een account? Log In!</a>
    </body>

</html>