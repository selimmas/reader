**AI READER** 
=============

Components
----------

* Docker & Docker compose
* [PHP][1] 7.3 alpine
* [Maria DB][2] 
* [PHPMYADMIN][3]
* [Composer][4]
* [Symfony/flex][5]
* [PHPUnit Bridge component][8]
* [Symfony Console component][6]
* [Symfony Dom Crawler][7]
* [Symfony Pack for Doctrine ORM][9]
* [Symfony MakerBundle][10]
* [StofDoctrineExtensionsBundle][11] NestedTree

Install
-------

```
docker-compose build
docker-compose up -d
chmod a+x bin/reader
```

Usage
-----

```
docker-compose run --rm php bin/reader
```

Issues
------

* composer add assets as root user

[1]: https://hub.docker.com/_/php
[2]: https://hub.docker.com/_/mariadb
[3]: https://hub.docker.com/r/phpmyadmin/phpmyadmin/
[4]: https://getcomposer.org/
[5]: https://symfony.com/doc/current/setup/flex.html
[6]: https://symfony.com/doc/current/components/console.html
[7]: https://symfony.com/doc/current/components/dom_crawler.html
[8]: https://symfony.com/components/PHPUnit%20Bridge
[9]: https://symfony.com/doc/current/doctrine.html
[10]: https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html
[11]: https://symfony.com/doc/master/bundles/StofDoctrineExtensionsBundle/index.html

