<?php
$title="Register";
require('header.php');
?>
<main class="container">
    <div class="alert" id="message">Enter details to create your account</div>
    <form method="post" action="save-register.php">
        <fieldset class="form-group">
            <label for="usename" class="col">Username: </label>
            <input name="username" id="username" required type="email" placeholder="email@email.com">
        </fieldset>
        <fieldset>
            <label for="password" class="col">Password:</label>
            <input name="password" type="password" id="confirm" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </fieldset>
        <fieldset>
            <label for="confirm" class="col">Confirm Password:</label>
            <input type="password" name="confirm" id="confirm" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        </fieldset>
        <div class="col">
            <input type="submit" value="Register" class="btn" />
        </div>
    </form>
</main>
</body>
</html>