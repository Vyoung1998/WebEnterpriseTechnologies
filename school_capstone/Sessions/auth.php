<?php 
//all from textbook
//checking if no session then start one
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

//setting inputs to session variables
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];
        //correct entry info
        $correct_user = "customer";
        $correct_pass = "customer";
        //compare to previous input

        if($_SESSION['user'] == $correct_user && $_SESSION['pass'] == $correct_pass){
            //if active say hi
        echo 'Hello valued customer!';}
        else {
            echo 'Sorry, please log in <a href="login.php">Login</a>';
            exit();
        
}