<?php

declare(strict_types = 1);

function signup_inputs(){

    if(isset($_SESSION['signup_data']['username']) && !isset($_SESSION['Errors_signup']['username_taken'])){
        echo '<div class="field input-field">
                <input type="text" name="username" placeholder="Username"  value="'. $_SESSION['signup_data']['username'].'" class="input">
            </div>';
    }else{
        echo '<div class="field input-field">
                <input type="text" name="username" placeholder="Username" class="input">
            </div>';
    }

    echo '<div class="field input-field">
            <input type="password" name="pwd" placeholder="Password" class="password">
            <i class="bx bx-hide eye-icon"></i>
        </div>';


    if(isset($_SESSION['signup_data']['email']) && !isset($_SESSION['Errors_signup']['Email_used']) && !isset($_SESSION['Errors_signup']['Invalid_email'])){
        echo '<div class="field input-field">
                 <input type="text" name="email" placeholder="Email"  value="'. $_SESSION['signup_data']['email'].'" class="input">
             </div>';
    }else{
        echo '<div class="field input-field">
                 <input type="text" name="email" placeholder="Email" class="input">
            </div>';
    }

}

function check_signup_error(){

    if(isset($_SESSION['Errors_signup'])){
        $errors = $_SESSION['Errors_signup'];

        echo '<br>';

        foreach ($errors as $error) {
            echo '<p class="form-error" style= "height: 30px; width: 100%; background-color: red; color: white;">' . $error. '</p>';
        }

        unset($_SESSION['Errors_signup']);
    }else{
        if(isset($_GET['signup']) && $_GET['signup'] === 'success') {
            echo '<br>';
            echo '<p class="form-error" style= "height: 30px; width: 100%; background-color: green; color: white;">';
        }
    }
}