# Rese

## 概要説明
飲食店を検索・お気に入り登録、予約できる飲食店予約アプリ

## アプリケーションURL
http://localhost/
- 予約・お気に入り登録は会員登録が必要です。
- 会員登録： http://localhost/ragister
- ログイン： http://localhost/login

## 主な機能
- 店舗一覧
- 店舗検索（地域・ジャンル・キーワード）
- ユーザー登録
- ログイン機能
- 予約登録・キャンセル機能
- お気に入り店舗登録
- マイページで予約状況・お気に入り表示

## 使用技術
Laravel８

## テーブル設計


## ER図


## 環境構築
- git clone https://github.com/yokotakiyomi/reservation-form.git
- cd your-repo
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan serve