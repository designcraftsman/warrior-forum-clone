<?php
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        echo('Please make sure to complete the form.');
    } else {
        try {
            // Establish a database connection (replace with your actual database configuration)
            $db = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
            // Prepare the SQL query using placeholders
            $sqlQuery = 'INSERT INTO members (username ,email ,password  ) VALUES (:username,:email,:password)';
            $insertData = $db->prepare($sqlQuery);
            $insertData->execute([
                'username' => $username,
                'email' => $email,
                'password' => $hashedPassword,
            ]);
            include('index.php');
        } catch (PDOException $e) {
            echo 'An error occurred: ' . $e->getMessage();
        }
    }

?>