<p align="center"><img src="https://raw.githubusercontent.com/honjou/docker_practice/images/logo.png"></p>

# EC-CUBE2 ローカル開発環境（PostgreSQL版）

Docker（docker-compose）でLAMP環境（PHP/Apache/PostgreSQL）を構築します。

EC-CUBE2 の新規プロジェクトなどお手軽るに構築できます。

データベースは MySQL ではなく PostgreSQL になります。

MySQL版は<a href="https://github.com/honjou/docker-eccube2" target="_blank">こちら</a>

## 前提条件

お使いの PC に Docker をインストールしておいてください。

<p><a href="https://laraweb.net/environment/6402/" target="_blank">「Docker for Windows」をインストール</a></p>

## 使い方

```
$ git clone https://github.com/honjou/docker-postgres .
$ docker-compose build
$ docker-compose up -d
```
<a href="http://localhost/test.php">http://localhost/test.php</a> にアクセスして表示されていれば、DB接続OK。

<p>詳細は<a href="https://laraweb.net/environment/10272/" target="_blank">こちら</a></p>

## ファイル構成

```
docker-postgres
┣ docker/
┃    ┣ app
┃    ┃┣ Dockerfile（※PDO PostgreSQL拡張ライブラリ設定済み）
┃    ┃┗ php.ini（※PDO PostgreSQL拡張ライブラリ設定済み）
┃    ┗ initdb
┃    　 ┗ articles.sql（動作確認用DBテーブル）
┣ src/ （ソースコード格納用ディレクトリ）
┃    ┗ test.php（PostgreSQL接続テストスクリプト）
┗ docker-compose.yml
```

## コンテナ構成

```
　┣ app（EC-CUBEを動かすコンテナ）
　　　・Apache:2
　　　・PHP:5.6
　　　・Composer:2.0.9
     ・Node.js:12
　┣ db（PostgreSQLを動かすコンテナ）
　　　・PostgreSQL:9.3
　┣ pgadmin（pgAdminを動かすコンテナ）
　　　・pgadmin:4
　┣ mailcatcher（MailCatcherを動かすコンテナ）
```