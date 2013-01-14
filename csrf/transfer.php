
<?php
    $db = mysql_connect("sql.mit.edu", "cliu2014", "charlesliu");
    mysql_select_db("cliu2014+6470security") or die(mysql_error());
    $from_id = $_GET['fromid'];
    $to_id = $_GET['toid'];
    $amount = $_GET['amount'];
    
    $str = "UPDATE accounts SET balance=balance-$amount WHERE userid=$from_id";
    mysql_query($str) or die(mysql_error());
    $str = "UPDATE accounts SET balance=balance+$amount WHERE userid=$to_id";
    mysql_query($str) or die(mysql_error());
    echo "success";
?>
