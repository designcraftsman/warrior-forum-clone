<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php  
    session_start();
    include('header.php');
 ?>
<div class="formContainer">
    <h1 class="formContainer__head">Add New Post</h1>
    <form class="formContainer__form" action="savePost.php" method="POST">
        <input class="formContainer__form__title"placeholder="Enter title here" type="text" name="title">
        <input class="formContainer__form__date" type="date" name="time">
        <input class="formContainer__form__description"placeholder="Paragraph"   type="text" name="description">
        <button class="formContainer__form__button">Publish</button>
    </form>
</div>
<script src="js/script.js"></script>
</body>
</html>