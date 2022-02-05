<?php
/**
 PostgreSQL接続テストスクリプト
 ユーザー名やパスワードなどは、docker-compose.yml にあわせて適宜変更してください
*/

// PostgreSQLのDSN
$dsn = 'pgsql:dbname=sampledb;host=myapp-db';
//
$db = new PDO($dsn, 'sample-user', 'samplepassword');

// ariclesテーブルを呼び出して出力
$sql = 'SELECT * FROM articles';
echo '<pre>';
foreach ($db->query($sql) as $row) {
    var_dump($row);
}
echo '</pre>';