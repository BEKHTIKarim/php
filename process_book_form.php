<?php
$title = $book == FALSE ? NULL : $book['title'];
$author = $book == FALSE ? NULL : $book['author'];
$date = $book == FALSE ? NULL : date('Y-m-d',$book['publish_date']);
$body = $book == FALSE ? NULL : $book['body'];
$body_id = $book == FALSE ? NULL : $book['id'];
$op = $book == FALSE ? 'create' : 'update';
 ?>
