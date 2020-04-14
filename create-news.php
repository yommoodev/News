<?php

	$dbengine   = 'mysql';
            $dbhost     = 'localhost';
            $dbuser     = 'root';
            $dbpassword = '';
            $dbname     = 'news_db';

            try{
                $conn = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

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


	    	echo "New records created successfully";
	    	header('location: index.php');

            return $conn;
            }  
            catch (PDOException $e){
                $e->getMessage();
            }
$conn = null;
?>