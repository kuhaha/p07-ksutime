<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><code>KsuTimer</code></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">司会者メニュー <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="chairperson.php">タイマー設定</a></li>
                <li class="divider"></li>
                <li><a href="../cerulean/">学会編集</a></li>
                <li><a href="../cosmo/">セッション編集</a></li>
                <li><a href="../cyborg/">お知らせ登録</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <?php
            $name = "ゲスト";
            if (isset($_SESSION['uname'])){
              $name = $_SESSION['uname'];
            }
            echo '<li><a href="#">'.$name.'さん</a></li>';
            ?>
            <li><a href="join.php" target="_blank">新規登録</a></li>
          <?php

            if (isset($_SESSION['urole'])){
              echo '<li><a href="logout.php" target="_blank">ログアウト</a></li>';
            }else{
              echo '<li><a href="login.php" target="_blank">ログイン</a></li>';
            }
          ?>
          </ul>

        </div>
      </div>
    </div>