<?php

    require_once('../inc/conn.php');

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        if (isset($_POST['register'])) {

            $last_name = $_REQUEST['last-name'];
            $first_name = $_REQUEST['first-name'];
            $middle_name = $_REQUEST['middle-name'];
            $age = $_REQUEST['age'];
            $contact = $_REQUEST['contact-no'];
            $email_address = $_REQUEST['email'];
            $address = $_REQUEST['address'];
            $username = $_REQUEST['username'];
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
            $registered = 1;

            $conn->beginTransaction();

            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO person (last_name, first_name, middle_name, age, contact, email_address, address, username, password, registered)
            VALUES (:lastname, :firstname, :middlename, :age, :contact, :email, :address, :username, :password, :registered)");
            $stmt->bindParam(':lastname', $last_name);
            $stmt->bindParam(':firstname', $first_name);
            $stmt->bindParam(':middlename', $middle_name);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':email', $email_address);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':registered', $registered);

            $stmt->execute();

            header('Location: ../index.php?success=true');
            
        }
        
    }

?>