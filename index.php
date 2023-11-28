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
    <?php include('header.php'); ?>
    <section class="content">
        <div class="container">
            <div id="welcome" class="container__welcome">
                <h2 class="container__welcome__h2">The #1 Digital Marketing Forum & Marketplace</h2>
                <hr>
                <div class="container__welcome__stats">
                    <div class="container__welcome__stats__members">
                        <h3>1,786,861</h3>
                        <h4>Members</h4>
                    </div>
                    <div class="container__welcome__stats__posts">
                        <h3>8,990,721</h3>
                        <h4>Posts</h4>
                    </div>
                    <div class="container__welcome__stats__threads">
                        <h3>780,212</h3>
                        <h4>Threads</h4>
                    </div>
                    
                </div>
            </div>
            <div id="nav" class="container__nav">
                <h2 class="container__nav__h2">Forums</h2>
                <hr>
                <ul class="container__nav__ul">
                    <li class="container__nav__ul__li"><a href="#">Marketing</a> </li>
                    <li class="container__nav__ul__li"><a href="#">Artificial intelligence</a></li>
                    <li class="container__nav__ul__li"><a href="#">Seo</a></li>
                    <li class="container__nav__ul__li"><a href="#">Ad networks</a></li>
                    <li class="container__nav__ul__li"><a href="#">Growth hacking</a></li>
                    <li class="container__nav__ul__li"><a href="#">Copywriting</a></li>
                    <li class="container__nav__ul__li"><a href="#">Social media</a></li>
                    <li class="container__nav__ul__li"><a href="#">Ecommerce</a></li>
                    <li class="container__nav__ul__li"><a href="#">Programming</a></li>
                </ul>
            </div>
       <div id="content" class="container__content">
              <div class="container__content__nav">
                <h4 class="container__content__nav__active">ALL TOPICS</h4>
                <div class="container__content__nav__topics">
                    <h4 class="container__content__nav__topics__opt">MOST RECENT </h4>
                    <h4 class="container__content__nav__topics__opt">MOST POPULAR</h4>
                </div>
            </div>

            <div class="container__content__articles">
            <!--Add new Post --> 
            <?php
                $mysqlConnection = new PDO('mysql:host=localhost;dbname=forum', 'root', 'root');
                $sqlQuery = 'SELECT * FROM articles ORDER BY `id` DESC';
                $articleStatement = $mysqlConnection ->prepare($sqlQuery);
                $articleStatement -> execute();
                $article = $articleStatement ->fetchAll();
                foreach($article as $articles){
            ?>
                <div class="container__content__articles__article">
                    <h2 class="container__content__articles__article__title"><?php echo $articles['title']; ?></h3>
                    <p class="container__content__articles__article__info">Posted by <a href="#"><?php echo $articles['user']; ?></a><?php echo $articles['time']; ?>  in <a href="#">PPC/SEM</a></p>
                    <p class="container__content__articles__article__description"><?php echo $articles['description']; ?><a href="post.php">[read more]</a></p>
                    <div class="container__content__articles__article__btn">
                        <a href="#">Reply</a>
                        <a href="#">Share</a>
                    </div>
                </div>
            <?php }?>   
            </div>

        </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>