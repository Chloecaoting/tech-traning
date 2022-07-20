# 投資面談予約システム

投資を始めたいお客様に投資に関するアドバイスを提供するために、顧客がアドバザーとの投資面談を予約できるシステム構築することを企画する

機能

- 新規メンバー登録：顧客はメールアドレスを使って、新規メンバー ID を作成する。
- ログイン：ID、PW でログインできる。
- 面談予約：面談予約画面で面談日時、と面談の Metting リンクを入力し、知りたいトピックを選んで、アドバイザーを予約する。
- 予約内容をキャンセルすることができる。
- 予約履歴表示できる。

## 構築環境

- php7
- php7-mysql
- node16
- composer2.3
- mysql
- phpmyadmin

## システム構築手順

- phpmyadmin を用いて mysql に「reservations」というテーブルを新規作成

- reservation フォルダ内の「.env.example」を「.env」にコピーし、環境を修正

mysql のパスワードを DB_PASSWORD に記入

```config
DB_PASSWORD=xxxxx
```

- 本システムを起動する

```bash
php artisan serve
```
