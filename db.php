<?php

    $db = new PDO('mysql:host=127.0.0.1;dbname=aston;','root','');

  /*  $book = [
      'title'=> 'Gotlib...',
      'author'=> 'Gotlib',
      'publish_date'=>19789546,
      'body'=>'Un livre humoristique de Gotlib',
    ];

    $query = $db->prepare("INSERT INTO book (title,author,publish_date, body) VALUES (:title, :author, :publish_date, :body)");
    $query->bindValue(':title',$book['title']);
    $query->bindValue(':author',$book['author']);
    $query->bindValue(':publish_date',$book['publish_date']);
    $query->bindValue(':body',$book['body']);

    $result = $query->execute();
    var_dump($query->errorInfo());

    var_dump($query);
    var_dump($query);*/
?>
