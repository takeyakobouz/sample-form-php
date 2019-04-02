<doctype! html>
 <html lang="ja">
  <head>
   <meta charset ="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
   <wrapper>
    <header>
      <h1>blog</h1>
    </header>
    <section>
      <p class="wellcome_text">ようこそ
        <a href="#"  class="succes!">
          <?php
           $name = $_GET["name"];
           echo $name;
          ?>
       </a>さん！<p>
    <form action ="index.php" method="get">
     <input type="text" name ="name" value=""><br/>
     <input type="submit" value="send">
    </p>
    </section>
    <footer>
     <p>
       <ul>
         <li><a href="#"  class="succes!">
           <?php
              $name = $_GET["name"];
              echo $name;
          ?>さんのマイページを見る
        </a></li>
         <li><a href="#">NEWS</a></li>
         <li><a href="#">BLOG</a></li>
       </ul>

       <a href="#">ヘルプ</a>
       <a href="#">利用規約</a>
       <a href="#">お問い合わせ</a>
     </p>
     <p>copyright <a href="#"  class="succes!">
       <?php
          $name = $_GET["name"];
          echo $name;
      ?>
    </a></p>
   </footer>
    <?php
      echo "hello";
      ?>
</wrapper>
  </body>
</html>
