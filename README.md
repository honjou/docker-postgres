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
<p>詳細は<a href="https://laraweb.net/surrounding/10114/" target="_blank">こちら</a></p>

## ディレクトリ構造

```
docker-postgres
　┣ docker
　┃　┗ app
　┃　　 ┃  ┣ Dockerfile（※PDO PostgreSQL拡張ライブラリあり）
　┃ 　　┃  ┗ php.ini
　┃　   ┗ initdb 
　┃       ┗ articles.sql（テスト用テーブル） 
　┣ src（ドキュメントルート）
    ┗ test.php ※Postgresの動作確認スクリプト
　┣ .gitignore
　┣ docker-compose.yml
　┣ README.md
```

## コンテナ構成

```
　┣ app（EC-CUBEを動かすコンテナ）
　　　・Apache:2
　　　・PHP:5.6
　　　・Composer:2.0.9
     ・Node.js:12
　┣ db（MySQLを動かすコンテナ）
　　　・PostgreSQL:12
　┣ pgadmin（pgadminを動かすコンテナ）
　　　・pgadmin:4
　┣ mailcatcher（MailCatcherを動かすコンテナ）
```