<?php

/*
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'psl-config.php';

function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;

    // This stops JavaScript being able to access the session id.
    $httponly = true;

    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}

function login($email, $password, $mysqli) {
    // Using prepared statements means that SQL injection is not possible. 
    if ($stmt = $mysqli->prepare("SELECT id, username, password, salt FROM members WHERE email = ? LIMIT 1")) {
        $stmt->bind_param('s', $email);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();

        // get variables from result.
        $stmt->bind_result($user_id, $username, $db_password, $salt);
        $stmt->fetch();

        // hash the password with the unique salt.
        $password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) {
            // If the user exists we check if the account is locked
            // from too many login attempts 
            if (checkbrute($user_id, $mysqli) == true) {
                // Account is locked 
                // Send an email to user saying their account is locked 
                return false;
            } else {
                // Check if the password in the database matches 
                // the password the user submitted.
                if ($db_password == $password) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];

                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    $_SESSION['user_id'] = $user_id;

                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);

                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $password . $user_browser);

                    // Login successful. 
                    return true;
                } else {
                    // Password is not correct 
                    // We record this attempt in the database 
                    $now = time();
                    if (!$mysqli->query("INSERT INTO login_attempts(user_id, time) VALUES ('$user_id', '$now')")) {
                        header("Location: ../error.php?err=Database error: login_attempts");
                        exit();
                    }

                    return false;
                }
            }
        } else {
            // No user exists. 
            return false;
        }
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function checkbrute($user_id, $mysqli) {
    // Get timestamp of current time 
    $now = time();

    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (2 * 60 * 60);

    if ($stmt = $mysqli->prepare("SELECT time FROM login_attempts WHERE user_id = ? AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $user_id);

        // Execute the prepared query. 
        $stmt->execute();
        $stmt->store_result();

        // If there have been more than 5 failed logins 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    } else {
        // Could not create a prepared statement
        header("Location: ../error.php?err=Database error: cannot prepare statement");
        exit();
    }
}

function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];

        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        if ($stmt = $mysqli->prepare("SELECT password FROM members WHERE id = ? LIMIT 1")) {
            // Bind "$user_id" to parameter. 
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);

                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Could not prepare statement
            header("Location: ../error.php?err=Database error: cannot prepare statement");
            exit();
        }
    } else {
        // Not logged in 
        return false;
    }
}

function esc_url($url) {

    if ('' == $url) {
        return $url;
    }

    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
    
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
    
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
    
    $url = str_replace(';//', '://', $url);

    $url = htmlentities($url);
    
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);

    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}


function imprimeForms(){
        for($i = 1; $i <= 12; $i++){

            if($i == 1){
                echo "<div id='form$i' style='display: block;'>";
            }else{
                echo "<div id='form$i' style='display: none;'>";
            }    
            echo "<div class='panel panel-default'>";
            echo "<div class='panel-body'>";
            echo "<div class='form-group'>";
            if($i <= 5){
                echo "<input type='text' class='form-control' placeholder='Nome do jogador $i' name='nome$i' required='required'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<input type='text' class='form-control' placeholder='CPF' name='cpf$i' required='required'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<input type='number' class='form-control' placeholder='N° da camisa' name='num$i' required='required'>";
            }else{
                echo "<input type='text' class='form-control' placeholder='Nome do jogador $i' name='nome$i'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<input type='text' class='form-control' placeholder='CPF' name='cpf$i'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<input type='number' class='form-control' placeholder='N° da camisa' name='num$i'>";
            }
            echo "</div>";                    
            echo "</div>";                   
            echo "</div>";                    
            echo "</div>";                    
        }                

    }


function getTimes($divisao, $op){
    // Seleciona todos as imagens
    $conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão 1. " . mysql_error());
    $db = @mysql_select_db("secure_login", $conn) or die ("Problemas na conexão 2. " . mysql_error());

    $sql = mysql_query("SELECT emblema, nome, divisao FROM times WHERE divisao = '$divisao' ORDER BY nome");

    $flag = true;                 
    echo "<h2 class='text-center'>$op</h2>";
    while ($flag) {                    
        echo "<ul class='list-inline'>";                                        
        for ($i=0; $i < 10; $i++) {
            $imgs = mysql_fetch_object($sql);                                                
            if($imgs){                                                        
                echo "<li>";
                echo "<form method='post' action='elenco.php'>";
                    echo "<input type='hidden' value='$imgs->nome' name='time'>";
                    echo "<button type='submit' class='btn btn-default' name='equipe' target='_blank'><img style='margin: 5px; width:70px; height:70px;' src='emblemas/".$imgs->emblema."'/></button>";
                echo "</form>";
                //echo "<a href='?$imgs->nome'><img style='margin: 5px; width:70px; height:70px; border: 2px solid #DDD ; border-radius: 3px; padding:5px;' src='emblemas/".$imgs->emblema."'/></a><br><h6><strong>$imgs->nome</strong></h6>";
                echo "</li>";
            }else{
                $flag = false;
            }
        }                           
        echo "</ul>";
    }                                
}