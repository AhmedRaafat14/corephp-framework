COMPOSER ?= composer
PHPUNIT_OPTS =


composer:
	$(COMPOSER) install


cc:
	rm -rf var/cache/*


clear: cc
	rm -rf var/logs/*


test: cc composer
	vendor/bin/phpunit -c . $(PHPUNIT_OPTS) --log-junit build/phpunit.xml


lint: cc lint-php lint-eol
	@echo All good.


lint-eol:
	@echo "\n==> Validating unix style line endings of files:files"
	@! grep -lIUr --color '^M' src/ composer.* || ( echo '[ERROR] Above files have CRLF line endings' && exit 1 )
	@echo All files have valid line endings

lint-php:
	@echo "\n==> Validating all php files:"
	@find src tests -type f -name \*.php | while read file; do php -l "$$file" || exit 1; done


coverage: cc composer
	mkdir -p build/coverage
	vendor/bin/phpunit --log-junit build/phpunit.xml --coverage-clover build/coverage.xml --coverage-html build/coverage


ci: clear composer lint test
	@echo "All quality checks passed"

