<?php
    if(isset($_POST['submit'])){
        $myfile = fopen($_POST['username'] . ".txt", "w") or die("Unable to open file!");
        fwrite($myfile, $_POST['username'] . "\n");
        fwrite($myfile, $_POST['password']);
        fclose($myfile);
    }
?>
