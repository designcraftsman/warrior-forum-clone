<?php
SESSION_START();
if (!isset($_POST['emailLogin']) || !isset($_POST['passwordLogin'])) {
    echo('Please make sure to complete the form.');
} else {
    try {
        // Establish a database connection (replace with your actual database configuration)
        $db = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];

        // Prepare the SQL query using placeholders
        $sqlQuery = 'SELECT * from members WHERE email = :email';
        $stmt = $db->prepare($sqlQuery);
        $stmt->execute([
            'email' => $email,
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if a user with the given email exists
        if ($user) {
            // Verify the hashed password
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                 include('index.php');
            } else {
                echo 'Incorrect password.';
            }
        } else {
            echo 'User not found.';
        }
    } catch (PDOException $e) {
        echo 'An error occurred: ' . $e->getMessage();
    }
}
?>