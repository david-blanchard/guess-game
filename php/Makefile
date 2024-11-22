init:
	docker compose build --force-rm --no-cache
	make up

up:
	docker compose up -d
	echo "App is running at http://127.0.0.1:8883"

schema-update:
	/home/guess/bin/console doctrine:database:create --if-not-exists
	/home/guess/bin/console doctrine:schema:update --complete --force

test-coverage:
	/home/guess/vendor/bin/phpunit --coverage-html html tests
