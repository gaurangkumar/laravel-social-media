<h1 align="center">Agwis.com</h1>
<p align="center">
    <a href="https://packagist.org/packages/ironphp/app" target="_blank">
        <img alt="Total Downloads" src="https://poser.pugx.org/ironphp/app/d/total.svg">
    </a>
    <a href="https://circleci.com/gh/ironphp/app" target="_blank">
        <img alt="CircleCI Build status" src="https://circleci.com/gh/ironphp/app.svg?style=svg">
    </a>
    <a href="https://github.styleci.io/repos/159154661">
        <img src="https://github.styleci.io/repos/159154661/shield?branch=master" alt="StyleCI">
    </a>
    <a href="https://ci.appveyor.com/project/gaurangkumar/app" target="_blank">
        <img alt="AppVeyor Build status" src="https://ci.appveyor.com/api/projects/status/2dg847baixltt4p4?svg=true">
    </a>
    <a href="https://packagist.org/packages/ironphp/app" target="_blank">
        <img alt="Latest Stable Version" src="https://poser.pugx.org/ironphp/app/v/stable.svg">
    </a>
    <a href="https://opensource.org/licenses/MIT" target="_blank">
        <img alt="Software License" src="https://poser.pugx.org/ironphp/app/license.svg">
    </a>
    <a href="http://hits.dwyl.io/ironphp/ironphp/app" target="_blank">
        <img alt="HitCount" src="http://hits.dwyl.io/ironphp/ironphp/app.svg">
    </a>
    <a href="http://php.net/" target="_blank">
        <img alt="Minimum PHP Version" src="https://img.shields.io/badge/php-%3E%3D%207.2-ee4499.svg?style=flat-plastic">
    </a>
</p>

## About Agwis.com

Created with IronPHP Framework 1.0.

The Framework source code can be found here: [ironphp/ironphp](https://github.com/ironphp/ironphp).

> [IronPHP Framework 1.0.12 alpha1](https://github.com/ironphp/ironphp/releases/tag/1.0.12-alpha1).

## Table of Contents

- [Requirements](#requirements)
- [Installing IronPHP via Composer](#installing-ironphp-via-composer)
- [Update](#update)
- [Configuration](#configuration)
- [Community](#community)
- [Get Support](#get-support)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

## Requirements

IronPHP requires PHP 7.3 or later; we recommend using the latest PHP version whenever possible.

## Installing IronPHP via Composer

You can install IronPHP as your project using
[Composer](https://getcomposer.org)  as
a starting point. you can run the following:

1. Download [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) or download `composer.phar` file.
2. Run

Clone repo

``` bash
$ git clone https://github.com/Agwis-Software/agwis.com.git
```

Go to ironphp dir, if installed without dirname:

```bash
$ cd agwis.com
```

If Composer is installed locally, run

``` bash
$ php composer.phar install
```

If Composer is installed globally, run

``` bash
$ composer install
```

If you have cloned or downloaded this repo, then you have to manually create `.env` file and generate `APP_KEY`:

```bash
$ copy .env.example .env
$ php jarvis key
```

Create application key:

```bash
$ jarvis key
```

Get all routes:

```bash
$ jarvis route
```
You can now use php developement webserver to view the default home page:

```bash
$ php jarvis serve
```

You can also use jarvis by shortcut for *Windows* (*only work in cmd*, not supported in Windows PowerShell, or Linux/MacOS terminal):

```bash
$ jarvis serve
```

Then visit [http://localhost:8000](http://localhost:8000) to see the welcome page.

## Update

Since this is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades atleast for NOT FOR NOW, so you have to update for this app-skeleton manually.

You can update The Framework `ironphp/ironphp` easily:

``` bash
$ composer update ironphp/ironphp
```

## Configuration

Read and edit `'Configuraton'` in `config/app.php` and setup the `'Datasource'` in `config/database.php`.

## Community

* IronPHP on [GitHub][1]
* Follow us on [FaceBook][2]

## About Us

IronPHP development is led by the [GaurangKumar Parmar](https://twitter.com/gaurangkumarp).

## Get Support

* [GitHub Issues](https://github.com/ironphp/app/issues) - Got issues? Please tell us!

## Security

If you’ve found a security issue in IronPHP, please use the following procedure instead of the normal bug reporting system. Instead of using the bug tracker, mailing list or IRC please send an email to gaurangkumarp@gmail.com.

For each report, we try to first confirm the vulnerability. Once confirmed, the IronPHP will take the following actions:

- Acknowledge to the reporter that we’ve received the issue, and are working on a fix. We ask that the reporter keep the issue confidential until we announce it.
- Get a fix/patch prepared.
- Prepare a post describing the vulnerability, and the possible exploits.
- Release new versions of all affected versions.
- Prominently feature the problem in the release announcement.

## Authors

- GaurangKumar Parmar  | [GitHub](https://github.com/gaurangkumar)  | [Twitter](https://twitter.com/gaurangkumarp) | [Patreon](https://www.patreon.com/gaurangkumar) | <gaurangkumarp@gmail.com>

[1]: https://github.com/ironphp
[2]: https://www.facebook.com/IronPHP-Framwork-325690624644002
