

## 掲示板の作成するプロジェクトです。
掲示板作成プロセスをギットにプッシュしていきます。

## 複数人でチーム開発する場合、ドッカーで同じ開発環境にする方法

 
１コードをギットハブから取得

２プロジェクトのディレクトリに移動

３ディレクトリ以下のコマンドを実行


docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs



この手順でsail環境を構築することができます。
