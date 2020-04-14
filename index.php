<?php require __DIR__.'../includes/functions.php' ?>

<html>
<head>
<title>News Site</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
</head>
<body>

    <div class="container">

        <div class="welcome">
           <h1>Create a News</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsModal">
              Click the button to create news
            </button>

            <!-- Modal -->
            <div class="modal fade" id="newsModal">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="create-news.php" method="post">
                          <div class="form-group">
                            <label>News Title</label>
                            <input type="text" class="form-control" name="news_title" required>
                          </div>
                          <div class="form-group">
                            <label>News Excerpt</label>
                            <input type="text" class="form-control" name="news_excerpt" required>
                          </div>
                          <div class="form-group">
                            <label>News Content</label>
                            <textarea class="form-control" name="news_content" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <div class="news-box">
            <h1>Latest news</h1>
            <?php
                // get the database handler
                $dbh = connect_to_db(); 
                // Get all news from db 
                $news = fetchNews($dbh);
            ?>
                <?php if ( $news && !empty($news) ) :?>
                    <?php foreach ($news as $key => $article) :?>
                        <div class="news">
                            <h2><a href="view-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
                            <p><?= stripslashes($article->news_excerpt) ?></p>
                            <span>Published on <?= date("M, jS  Y")?></span>
                        </div>
                    <?php endforeach?>
            <?php endif?>
        </div>

        <div class="footer">
           Jerome News Site <?= date("Y") ?> - all rights reserved.
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>