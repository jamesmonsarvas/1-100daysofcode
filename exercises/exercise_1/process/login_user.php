<?php

    session_start();

    require_once('../inc/conn.php');

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
            
        $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        $sql = "SELECT id, username, password FROM person WHERE username = :username";
        $stmt = $conn->prepare($sql);
        
        //Bind value.
        $stmt->bindValue(':username', $username);
        
        //Execute.
        $stmt->execute();
        
        //Fetch row.
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //If $row is FALSE.
        if($user === false){
            //Could not find a user with that username!
            //PS: You might want to handle this error in a more user-friendly manner!
            die('Incorrect username / password combination!');
        } else{
            //User account found. Check to see if the given password matches the
            //password hash that we stored in our users table.
            
            //Compare the passwords.
            $validPassword = password_verify($passwordAttempt, $user['password']);
            
            //If $validPassword is TRUE, the login has been successful.
            if($validPassword){
                
                //Provide the user with a login session.
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['logged_in'] = time();
                
                //Redirect to our protected page, which we called home.php
                header('Location: ../view_user.php');
                exit;
                
            } else{
                //$validPassword was FALSE. Passwords do not match.
                die('Incorrect username / password combination!');
            }
        }
        
    }

?>