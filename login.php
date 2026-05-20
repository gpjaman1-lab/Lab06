<?php include 'header.inc'; ?>

<form method="POST" action="process.php">

    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="hidden" name="token" value="TX106201993">

    <input type="submit" value="Login">

</form>

<?php include 'footer.inc'; ?>