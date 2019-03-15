<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body>
<?php $e = 1; ?>
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>設定</span>
        </div>
      </div>
    </header>

    <div class="main-contents">

      <div class="op-vis">
        <span class="op-des">
          データ
        </span>
      </div>
      <div class="option">
        <div class="op-box main-block">
          <a href="treasurer.php">お会計</a>
        </div>
        <div class="op-box main-block">
          <a href="menu_add.php">メニューの追加</a>
        </div>
        <div class="op-box main-block">
          <a href="menu_delete.php">メニューの削除</a>
        </div>
        <div class="op-box main-block">
          <a href="statistics.php">統計</a>
        </div>
      </div>

      <div class="op-vis">
        <span class="op-des">
          ユーザー
        </span>
      </div>
      <div class="option">
        <div class="op-box main-block">
          <a href="user.php">ユーザー情報</a>
        </div>
        <div class="op-box main-block">
          <a href="logout.php">ログアウト</a>
        </div>
      </div>

</div>

<?php include ('toolbar.php'); ?>
<?php include ('tscript.php'); ?>
</body>
</html>