<p align="center"><img src="https://raw.githubusercontent.com/honjou/docker_practice/images/logo.png"></p>

# EC-CUBE2 ローカル開発環境（PostgreSQL版）

Docker（docker-compose）でLAMP環境（PHP/Apache/PostgreSQL）を構築し、EC-CUBE2 の新規プロジェクトをお手軽るに構築できます。

データベースは MySQL ではなく PostgreSQL になります。

MySQL版は<a href="https://github.com/honjou/docker-eccube2" target="_blank">こちら</a>

## 前提条件

お使いの PC に Docker をインストールしておいてください。

<p><a href="https://laraweb.net/environment/6402/" target="_blank">「Docker for Windows」をインストール</a></p>

## 使い方

EC-CUBE 2.17 本体は以下からダウンロードしてください。

<a href="https://github.com/EC-CUBE/ec-cube2/releases/tag/eccube-2.17.2">EC-CUBE 2.17系（公式）</a>

```
$ git clone https://github.com/honjou/docker-postgres .
$ docker-compose build
$ docker-compose up -d
```
<p>詳細は<a href="https://laraweb.net/surrounding/10114/" target="_blank">こちら</a></p>

## ディレクトリ構造

```
ec-cube2
　┣ docker（docker本体）
　┣ src（EC-CUBE2本体）
    ┗ eccube2 ← ※EC-CUBE2.17 のデータを格納
　┣ .gitignore
　┣ docker-compose.yml
　┣ README.md
```

## コンテナ構成

```
　┣ app（EC-CUBEを動かすコンテナ）
　　　・Apache:2
　　　・PHP:7.4
　　　・Composer:2.0.9
     ・Node.js:12
　┣ db（MySQLを動かすコンテナ）
　　　・PostgreSQL:latest
　┣ pgadmin（pgadminを動かすコンテナ）
　　　・pgadmin:4
　┣ mailcatcher（MailCatcherを動かすコンテナ）
```