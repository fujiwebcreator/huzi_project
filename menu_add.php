<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>メニューの追加</span>
        </div>
      </div>
      <div class="left-menu">
          <a href="option.php">＜</a>
      </div>
    </header>
    
    <div class="main-contents2">

        <div class="add-block">
          <table>
              <tr>
                <th>オレンジジュース</th>
                <td>1</td>
              </tr>
              <tr>
                <th>鳥の唐揚げ</th>
                <td>2</td>
              </tr>
              <tr>
                <th></th>
                <td></td>
              </tr>
          </table>
        </div>
        
        <div class="decision-block wrapper">
            <div class="back-bu main-block">
                <a href="option.php">戻る</a>
            </div>
            <div class="next-bu main-block">
                <a href="option.php">決定</a>
            </div>
        </div>
        
        
        <div class="menu-touroku">
            <form ction="option.php">
              <!-- Eメール入力エリア -->
              <div class="form-group">
                <label>menu</label>
                <input type="menu-name" class="form-control" placeholder="メニュー名">
              </div>
              <!-- パスワード入力エリア -->
              <div class="form-group">
                <label>price</label>
                <input type="menu-price" class="form-control" placeholder="値段">
              </div>
              <!-- パスワード入力エリア -->
              <div class="form-group">
                <label>category</label>
                <input type="menu-category" class="form-control" placeholder="カテゴリー">
              </div>
              <!-- 送信ボタン -->
              <button type="submit" class="back-bu">登録</button>
            </form>
        </div>
        
    </div>



<?php include ('tscript.php'); ?>
</body>
</html>
