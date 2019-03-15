<!DOCTYPE html>
<html>
<?php include ('head.php'); ?>
<body style="background: #f9f9f9">
    
    
    
    <header>
      <div class="container-fluid navbar">
        <div class="navbar-text">
          <span>A(2名)注文</span>
        </div>
      </div>
      <div class="left-menu menu-block">
          <a href="#over-1">中止</a>
      </div>
    </header>
    
    <div class="main-contents">

        <form id="mailformpro" action="mailformpro/mailformpro.cgi" method="POST">
          <table border="0" cellspacing="0" cellpadding="0">
            <div>
              <div class="order-con">
                <label>
                  <input type="radio" name="entryPlan" value="hoge1" onclick="entryChange1();" checked="checked" />
                    <div class="order-section">料理</div>
                  </label>
                <label>
                  <input type="radio" name="entryPlan" value="hoge2" onclick="entryChange1();" />
                    <div class="order-section">ドリンク</div>
                  </label>
              </div>
            </div>
            <?php include ('order_food.php'); ?>
            <?php include ('order_drink.php'); ?>
          </table>
        </form>
        
    </div>

    <div class="tool-next main-block">
        <a href="order_add.php">次へ</a>
    </div>
    
    
<div class="action-seat" id="over-1">
    <a href="#over-1"></a>
</div>  
 
<div class="choise" id="over-2">
    <div class="choise_in">
        <div class="ac-top">
            <div class="ac-1">
                オーダーの登録を
                <br>中止しますか
            </div>
        </div>
        <div class="ac-bottom">
            <div class="ac-2 main-block">
                <a href="#">キャンセル</a>
            </div>
            <div class="ac-3 ac3-b main-block">
                <a href="order.php">はい</a>
            </div>
        </div>
    </div>
</div>
    
<?php include ('tscript.php'); ?>
</body>
</html>
