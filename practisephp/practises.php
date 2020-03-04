<?php
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $radios = $_POST['radio'];
    $select = $_POST['select'];
    $interest = $_POST['interest'];
    echo "Hello Your name is". " ".$name. " ". "and your password is". 
    " ".$pass. " ". "You are a". " ". $radios. " ". "You are". " ". $select. " ";
   
    foreach ( $interest as $value){
        echo "You are interested". " ".$value. " ";
    }
?>