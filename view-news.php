<?php require __DIR__.'../includes/functions.php' ?>
<html>
<head>
    <title>View News</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <div class="welcome">
            <h1>News</h1>
            <a href="index.php" class="btn btn-primary">return to home page</a>
        </div>

        <div class="news-box">

            <div class="news">
                <?php
                    // get the database handler
                    $dbh = connect_to_db(); // function created in dbconnect, remember?

                    $id_article = (int)$_GET['newsid'];

                    if ( !empty($id_article) && $id_article > 0) {
                        // Fecth news
                        $article = getAnArticle( $id_article, $dbh );
                        $article = $article[0];
                    }else{
                        $article = false;
                        echo "<strong>Wrong article!</strong>";
                    }

                    $other_articles = getOtherArticles( $id_article, $dbh );

                ?>

                <?php if ( $article && !empty($article) ) :?>

                <h2><?= stripslashes($article->news_title) ?></h2>
                <span>published on <?= date("M, jS  Y") ?></span>
                <div>
                    <p><?= stripslashes($article->news_content) ?></p>
                </div>
            <?php else:?>

            <?php endif?>
            </div>

        </div>

        <div class="footer">
            <?= date("Y") ?> - all rights reserved.
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>