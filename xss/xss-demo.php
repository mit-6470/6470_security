<html>
    <head><title>XSS Demo</title></head>
    <body>
    <?php
        /*
            XSS vulnerability: GET requests a and b are not checked
            visit the URL http://cliu2014.scripts.mit.edu/security/xss-demo.php?a=%3Cscript%3Evoid('&b=');alert(1);%3C/script%3E
        */
        $a = $_GET['a'];
        $b = $_GET['b'];
        $str = "The value of a was $a. The value of b was $b";
        echo $str;
    ?>
    </body>
</html>

