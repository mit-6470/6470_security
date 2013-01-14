<?php
    $db = mysql_connect("sql.mit.edu", "cliu2014", "charlesliu");
    mysql_select_db("cliu2014+6470security") or die(mysql_error());
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    // $user = mysql_real_escape_string($user);
    // $pass = mysql_real_escape_string($pass);
    $query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
    echo "<b>" . $query . "</b>";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) {
        echo "<br /><br />" .$row["user"] . " " . $row["phone"];   
    }
?>

<form action="" method="POST">
    <br /><br />
    Username: <input name="user" /><br />
    Password: <input name="pass" /><br />
    <input type="submit" />
</form>
