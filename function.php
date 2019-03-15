<?php
//データベース操作関数、SQL文を受け取る
function NGO($process) {
    include("mysqlenv.php");

    try {
        $dbh = new PDO($dsn, $USER, $PASS);
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    $sql = $process;
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    return $stmt;
}


?>


