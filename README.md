AKarismatik CMS Sandbox
=============

## Overview ##
This bundle is used by Karismatik agency.
It is based on :
* [**Symfony Standard edition**](https://github.com/symfony/symfony-standard)
* [**Symfony CMF**](http://symfony.com/doc/master/cmf/index.html)
* [**Prestacms sandbox**](https://github.com/prestaconcept/prestacms-sandbox)

## Features ##

- [x] Multiple website
- [x] Custom theming
- [x] Page edition
- [x] WYSIWYG integration

## Installing AKarsimatik cms Sandbox ##

### Get the code ###

As Symfony uses [Composer](http://getcomposer.org/) to manage its dependencies, the recommended way to create a new project is to use it.

If you don't have Composer yet, download it following the instructions on http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar create-project AKarismatik/cms-sandbox path/to/install/Akarismatik-sandbox -s dev

Composer will install Symfony and all its dependencies under the `path/to/install` directory.

You can also use git clone:

    git clone https://github.com/AKarismatik/cms-sandbox AKarismatik-sandbox

### Create the database ###

    app/console doctrine:database:create
    app/console doctrine:schema:create
    chmod 777 app/database app/logs app/cache
    app/console doctrine:phpcr:repository:init
    app/console doctrine:phpcr:fixtures:load --no-interaction
    app/console doctrine:fixture:load --no-interaction
    app/console assets:install --symlink
    app/console assetic:dump --env=prod

If you have 'make' installed on your machine, you can use the install command

    make install

Another command to reload fixtures:

    make refresh

:speech_balloon: : if you have a permission denied error, you just need to add the execution right on your console

    chmod +x app/console

---

If you want more documentation about settings up Doctrine PHPCR-ODM with Jackrabbit or Midgard, have a look at
the [specific documentation](http://symfony.com/doc/master/cmf/tutorials/installing-configuring-doctrine-phpcr-odm.html) or
the [cmf-sandbox set-up](https://github.com/symfony-cmf/cmf-sandbox)

### Getting started using Vagrant

please checkout the [README.md](vagrant) in the vagrant/ folder of the project

---

*This project is supported by [Karismatik Agency](http://sandbox.akarismatikcms.fr)*

:book: **Usefull links**
 * [**PrestaCMSCorebundle Documentation**](https://github.com/prestaconcept/PrestaCMSCoreBundle)
 * [**PrestaConcept Bundles**](https://github.com/prestaconcept)
 * [**Symfony CMF Documentation**](http://symfony.com/doc/master/cmf/index.html)
