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
Laravel８

## テーブル設計
<img width="333" alt="テーブル" src="https://github.com/user-attachments/assets/4f35c7ca-2088-434f-b503-896063a1c92a" />

## ER図
<img width="747" alt="ER図" src="https://github.com/user-attachments/assets/c8067184-40d0-48f9-887f-bf120ecbd62f" />

## 環境構築
- git clone https://github.com/yokotakiyomi/reservation-form.git
- cd your-repo
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan serve
