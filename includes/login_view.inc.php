<?php

declare(strict_types= 1);   
// include_once 'includes/login.inc.php';

function output_username(){
    if(isset($_SESSION['user_id'])){
        echo 'You are logged in as'.$_SESSION['user_username'];
    }else{
        echo "you dont belong here.";
    }
}
function check_login_errors(){
    if(isset($_SESSION["Errors_login"])){
        $errors = $_SESSION["Errors_login"];

        echo"<br>";

        foreach($errors as $error){
            echo '<p class="form-error">' . $error .'<br>';
        }
        unset($_SESSION["Errors_login"]);
    }else if(isset($_GET['login']) && $_GET['login'] === 'sucess'){
        echo '<br>'; 
        echo '<p class="form-success"> Login Success! <p>';        
    }
}