<?php 
    require __DIR__.'/../config/dbconnect.php'; 

    function createNews( $conn ) 
    {
        $request = $conn->prepare("INSERT INTO news_info (news_title, news_excerpt, news_content) 
        VALUES (:news_title, :news_excerpt, :news_content)");
            $request->bindParam(':news_title', $news_title);
            $request->bindParam(':news_excerpt', $news_excerpt);
            $request->bindParam(':news_content', $news_content);

            //insert a row
            $news_title = $_POST["news_title"];
            $news_excerpt = $_POST["news_excerpt"];
            $news_content = $_POST["news_content"];
            $request->execute();
    }

    function fetchNews( $conn )
    {

        $request = $conn->prepare(" SELECT news_id, news_title, news_excerpt FROM news_info ORDER BY news_id DESC");
        return $request->execute() ? $request->fetchAll() : false; 
    }


    function getAnArticle( $id_article, $conn )
    {

        $request =  $conn->prepare(" SELECT news_id, news_title, news_content FROM news_info WHERE news_id = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }

    function getOtherArticles( $differ_id, $conn )
    {
        $request =  $conn->prepare(" SELECT news_id,  news_title, news_excerpt, news_content FROM news_info  WHERE news_id != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false; 
    }