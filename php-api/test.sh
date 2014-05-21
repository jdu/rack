#/bin/bash

find /var/www/siv-v3/api/application -name "*.php" -exec php -l {} \;
phploc --count-tests --exclude /var/www/siv-v3/api/application/third_party /var/www/siv-v3/api/application /var/www/siv-v3/api/tests;
pdepend --ignore=/var/www/siv-v3/api/application/third_party /var/www/siv-v3/api/application;
# phpmd /var/www/siv-v3/api/application text cleancode,codesize,controversial,design,naming,unusedcode --exclude /var/www/siv-v3/api/application/third_party;
# phpmd /var/www/api/application text cleancode,codesize,controversial,design,naming,unusedcode --exclude /var/www/siv-v3/api/application/third_party;
# phpcs /var/www/siv-v3/api/application;
# phpcs --report=checkstyle /var/www/siv-v3/api/application;
# phpcpd --log-pmd /var/www/siv-v3/api/application;
phpunit;
