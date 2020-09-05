<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: arial;
    }

    body,
    html{
      width: 100%;
      height: 100vh;
      padding: 0;
    }
    .album{
      height: 200px;
    }


    img.poster{
      height: 110px;
    }
    header{
      width: 100%;
      background-color: #2e3a46;
    }
    header .header-container{
      margin: auto;
      height: 50px;
      padding: 6px;
      width: 70%;
    }
    header .header-container img{
      height: 100%;
    }
    main{
      background-color: #1e2d3b;
      min-height: 100vh;
      width: 100%;
    }

    .disks-box{
      display: flex;
      width: 70%;
      margin: auto;
      flex-wrap: wrap;
      padding-top: 50px;

    }

    .album{
      background-color: #2e3a46;
      width: 140px;
      height: 240px;
      padding: 13px;
      margin: 10px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: column;
    }

    .album > div{
      text-align:  center;
    }

    .title{
      text-transform: uppercase;
      color: white;
      font-size: 15px;
      margin-top: 10px;
      margin-bottom: 15px;
    }

    .author, .year{
      color: grey;
      font-size: 12px;
    }
    
    </style>
  </head>
  <body>

    <header>
      <div class="header-container" >
        <img src="spoticon1.png">
      </div>
    </header>


    <main>
      <div class="disks-box">
        <?php
        require __DIR__ . '/partials/vars.php';

        foreach ($list as $key => $value) {
          foreach ($value as $value1) {
            ?>
            <div class="album">
            <img class="poster" src="<?php echo $value1['poster']; ?>" alt="">
            <div class="title"><?php echo $value1['title'] ?></div>
            <div class="author"><?php echo $value1['author'] ?></div>
            <!-- <div class="genre"><?php echo $value1['genre'] ?></div> -->
            <div class="year"><?php echo $value1['year'] ?></div>
            </div>
            <?php
          }
        }

        ?>

      </div>
    </main>



  </body>
</html>
