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
            if ($_GET["name"]){
              $name = $_GET["name"];
              echo $name;
            }else{
              echo "no read";
            }

          ?>
       </a>さん！<p>
    <form action ="index.php" method="get">
     <input type="text" name ="name" placeholder="名前を入力" ><br/>
     <input type="submit" value="send">
    </p>
    </section>
    <footer>
     <p>
       <ul>
         <li><a href="#"  class="succes!">
           <?php
            if ($_GET["name"]){
              $name = $_GET["name"];
              echo $name;
            }else{
              echo "no read";
            }

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
            if ($_GET["name"]){
              $name = $_GET["name"];
              echo $name;
            }else{
              echo "no read";
            }

          ?>
    </a></p>
   </footer>
    <?php
      echo "hello";
      ?>
</wrapper>
  </body>
</html>
