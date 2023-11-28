<?php
session_start();
if (!isset($_POST['title']) ||  !isset($_POST['time']) || !isset($_POST['description'])) {
    echo('Please make sure to complete the form.');
} else {
    try {
        // Establish a database connection (replace with your actual database configuration)
        $db = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $title = $_POST['title'];
        $user = $_SESSION['username'];
        $time = $_POST['time'];
        $description = $_POST['description'];

        // Prepare the SQL query using placeholders
        $sqlQuery = 'INSERT INTO articles (title ,user ,time ,description ) VALUES (:title,:user,:time,:description)';
        $insertData = $db->prepare($sqlQuery);
        $insertData->execute([
            'title' => $title,
            'user' => $user,
            'time' => $time,
            'description' => $description,
        ]);
        include('index.php');
    } catch (PDOException $e) {
        echo 'An error occurred: ' . $e->getMessage();
    }
}
?>