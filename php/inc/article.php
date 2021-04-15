<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>oNews</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="wrapper">
    <!-- emmet: header>h1+p+nav>ul>li*3>a -->
    <?php
    include "inc/left.php"
     ?>

    <main class="right">

      <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
     <!-- <h2 class="right__title">Lorem ipsum dolor sit amet</h2>-->
     <h2 class="right__title"><?php echo $data['title']; ?></h2> 
      <div class="posts_article">
        <article class="article">
          <a href="" class="post__category post__category--color-team">team</a>
          <!--<h3>Lorem ipsum dolor article 1</h3>-->
          <div class="post__meta">
            <img class="post__author-icon" src="../images/icon-dar.png" alt="">
            <strong class="post__author"><?php echo $data['author'] ?></strong>
            <time datetime="2018-02-10">le 27 mars 2018</time>
          </div>
          <p> 
          <?php echo $data['text'] ?><
          </p>
          <a href="index.php" class="post__link">Back to home</a>
        </article>

          



      </div>
    </main>
  </div>
</body>

</html>