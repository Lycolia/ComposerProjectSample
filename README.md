# 作り方

1. `composer init` でプロジェクトを作成
2. `composer require [パッケージ名]` でパッケージを入れる
3. 名前空間を作る場合、 `composer.jspn` に以下のセクションを作成
   1. リファレンス: [getcomposer.org](https://getcomposer.org/doc/04-schema.md#autoload)
```json:composer.json
"autoload": {
    "psr-4": {
        "App\\": "src/App" // 名前空間と対応するパス
    },
    "classmap": [
        "src/App" // クラスを読み込むディレクトリのルート
    ]
}
```
4. `autoload` や `class_alias` などを設定する `bootstrap.php` を適当に作成
   1. この `bootstrap.php` はエントリポイントから `require_once` などで読み込無事で有効化する
5. `phpunit` を組み込む場合
   1. `composer require --dev phpunit/phpunit` でインストール
   2. `composer.json` に以下のセクションを作成
```json:composer.json
    "scripts": {
        "test": [
            "phpunit --bootstrap bootstrap.php test"
        ]
    }
```