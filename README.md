# Next.js × Laravel の環境構築


## コンテナ起動

```sh
docker-compose up -d --build
```

## Laravelインストール

```sh
docker-compose exec api composer create-project laravel/laravel .
```

`api`ディレクトリ内にLaravelがインストールされる

`localhost:80`にアクセスするとLaravelのウェルカムページが表示される

## Next.jsインストール

```sh
docker-compose exec front yarn create next-app  --typescript .

# 開発用サーバー起動
docker-compose exec front yarn dev
```

`front`ディレクトリ内にNext.jsがインストールされる

`localhost:3000`にアクセスするとNext.jsのウェルカムページが表示される

開発用サーバーの停止は`control + c`

