<?php 

function connectDB() {
    $link = new PDO("mysql:host=localhost;dbname=blog_db", 'blog_db', 'blog_db');
    return $link;
}

function getAllPost() {
    $link = connectDB();
    $result = $link->query('SELECT id, title FROM post');
    $posts = []; 
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $posts[] = $row;
    }
    closeDB($link);
    return $posts;
}

function closeDB(&$link) {
    $link = null;
}

function getPostById($id) {
    $link = connectDB();
    //NTU
    $query = 'SELECT id, title, content FROM post WHERE id=:id;';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $post = $statement->fetch(PDO::FETCH_ASSOC);
    closeDB($link);
    return $post;
}
?>