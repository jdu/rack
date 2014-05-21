#/bin/bash

# PHPdoc
sudo pear channel-discover pear.phpdoc.org
sudo pear install phpdoc/phpDocumentor

# phploc
sudo wget https://phar.phpunit.de/phploc.phar
sudo chmod +x phploc.phar
sudo mv phploc.phar /usr/local/bin/phploc

# PDepend
sudo pear channel-discover pear.pdepend.org
sudo pear install pdepend/PHP_Depend-beta

# PHPMD
sudo pear channel-discover pear.phpmd.org
sudo pear install --alldeps phpmd/PHP_PMD

# PHP_CodeSniffer
sudo pear install PHP_CodeSniffer

# PHPUnit
sudo wget https://phar.phpunit.de/phpunit.phar
sudo chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit

# PHPcd
sudo wget https://phar.phpunit.de/phpcpd.phar
sudo chmod +x phpcpd.phar
sudo mv phpcpd.phar /usr/local/bin/phpcpd

# PHP XSL Support
sudo apt-get install php5-xsl

# Install XDebug
sudo pecl install xdebug
$XDEBUG_LOCALE = find / -name 'xdebug.so' 2> /dev/null
sudo echo 'zend_extension=${XDEBUG_LOCALE}' >> /etc/php5/apache2/php.ini
sudo service apache2 restart
