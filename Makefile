.DEFAULT_GOAL := help

.PHONY: init
init: ## 初期設定コマンド
	cp ./src/.env.example ./src/.env
	docker compose up -d --build
	docker compose exec app composer install
	docker compose exec app php artisan key:generate
	docker compose exec app php artisan storage:link

.PHONY: up
up: ## コンテナ起動
	docker compose up -d

.PHONY: down
down: ## コンテナ停止
	docker compose down

.PHONY: clean
clean: ## クリーンアップ
	docker compose down --rmi all --volumes --remove-orphans

.PHONY: exec
exec: ## コンテナ接続
	docker compose exec app bash

.PHONY: logs
logs: ## コンテナログ表示
	docker compose logs -f

.PHONY: ps
ps: ## コンテナステータス表示
	docker compose ps

.PHONY: help
help: ## ヘルプ表示
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | \
		awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'
