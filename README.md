# Rese
<img width="1625" alt="トップ画" src="https://github.com/user-attachments/assets/be1d6caa-dff5-44dc-900e-8baf2d52022b" />

## 概要説明
飲食店を検索・お気に入り登録、予約できる飲食店予約アプリ

## アプリケーションURL
http://localhost/

予約・お気に入り登録は会員登録が必要です。　　
- 会員登録： http://localhost/register
- ログイン： http://localhost/login

## 主な機能
- 店舗一覧
- 店舗検索（地域・ジャンル・キーワード）
- ユーザー登録
- ログイン機能
- 予約登録・キャンセル機能
- お気に入り店舗登録
- マイページで予約状況・お気に入り店舗表示

## 使用技術
| 種類     | 技術                             |
|----------|----------------------------------|
| フレームワーク | Laravel 8                       |
| 言語     | PHP / JavaScript / Blade          |
| データベース | MySQL                           |
| バージョン管理 | Git / GitHub                   |
| 環境構築 | Laravel Sail（Docker）またはローカル |


## テーブル設計
<img width="333" alt="テーブル" src="https://github.com/user-attachments/assets/4f35c7ca-2088-434f-b503-896063a1c92a" />

## ER図
<img width="747" alt="ER図" src="https://github.com/user-attachments/assets/c8067184-40d0-48f9-887f-bf120ecbd62f" />

## 環境構築
*1.リポジトリをクローン*

$ git clone https://github.com/yokotakiyomi/reservation-form.git

$ cd reservation-form


*2.Dockerの設定*

$ docker-compose up -d --build


*3.Laravelのパッケージのインストール*

$ docker-compose exec php bash

$ composer install


*４..envファイルの作成*

$ cp .env.example .env


*５..envを編集し、データベース情報を入力*

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=your_database_name
- DB_USERNAME=your_username
- DB_PASSWORD=your_password


*６.アプリケーションキーを生成*

$ php artisan key:generate


*７.データベースのマイグレーションを実行*

$ php artisan migrate


*8.アプリケーションにアクセス*

http://localhost:8000
