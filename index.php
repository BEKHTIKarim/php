<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $char = "Za Warudo ! ";
      $char1 = "Ora! ";
      $char2 = "Muda! ";
      $orac = rand(1,10);
      $mudac = rand(1,10);

      $tab = array(
        'title'=> 'BLC',
        'author'=> [
          'name'=> 'SambaDiore',
          'birth' => 'BLC',
          'deceased' => FALSE,
          ],
        'publication'=> 2015,

    );
    $books = [
      [
        'title'=> 'BLC',
        'author'=> [
          'name'=> 'SambaDiore',
          'birth' => 'BLC',
          'deceased' => 27,
          ],
        'publication'=> 2015,
      ],
      [
        'title'=> 'BLC',
        'author'=> [
          'name'=> 'SambaDiore',
          'birth' => 'BLC',
          'deceased' => FALSE,
          ],
        'publication'=> 2015,
      ],
      [
        'title'=> 'BLC',
        'author'=> [
          'name'=> 'SambaDiore',
          'birth' => 'BLC',
          'deceased' => 2016,
          ],
        'publication'=> 2015,
      ],
    ];
      echo '<h1>', $char, '</h1>';
      for ($i=$orac; $i >0 ; $i--) {
        echo $char1;
      }
      for ($i=$mudac; $i>0 ; $i--) {
        echo $char2;
      }
      $wry = ($mudac>$orac) ? 'WRYYYYYY' : 'MASAKA, KONO DIO GA MAKETA ?! KONO DIA GAAaaa...' ;
      echo $wry;
      echo '<h1>', $tab['author']['birth'] , '</h1>';
      print '<section>';
      foreach ($books as $book) {
        print '<h2>' .$book['title']. '</h2>';
        echo '<h2>', $book['title'], '</h2>';
          foreach ($book['author'] as $key => $value) {
            print show($key,$value);
        }
      }
      print '</section>';
      print '<aside>';
      foreach ($books as $key => $value) {
        $title = show_title($book['title']);
        print $title;
      }
      print '</aside>';
      function show_title($title){
        $markup ='<h2>'.$title.'</h2>';
        return $markup;
      }
      function show($key,$value)
      {
        if($key == 'deceased')
        {
          if($value)
          {
              return $key. ' : '.$value.'<hr/>';
          }
        }
        else {
          return $key. ' : '.$value.'<hr/>';
        }
      }
      if(isset($blc)){
        print 'la variable existe.';
      }else {
        print "la variable n'existe pas.";
      }
    ?>
  </body>
</html>
