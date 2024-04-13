# 条件分岐ワークショップ

![laravel_version](https://img.shields.io/badge/laravel-11.0-blue.svg?logo=laravel) ![php_version](https://img.shields.io/badge/php-8.3-blue.svg?logo=php) ![composer_version](https://img.shields.io/badge/composer-2.7-blue?logo=composer)

> [!NOTE]
> このワークショップでは、条件分岐処理における様々な原則・パターンを使用してリファクタリングします

> [!TIP]
> - 単一責任選択の原則
> - リスコフの置換原則
> - 早期リターン
> - ストラテジーパターン
> - ポリシーパターン

## 環境構築

```bash
make init
```

http://localhost:9000

### 他コマンド表示

```bash
make help
```

## ディレクトリ構造
```bash
# 触るのはapp, domain, routesくらい
.
├── README.md
├── app
├── artisan
├── bootstrap
├── composer.json
├── composer.lock
├── config
├── database
├── domain
├── package.json
├── phpunit.xml
├── public
├── resources
├── routes
├── storage
├── tests
├── vendor
└── vite.config.js
```