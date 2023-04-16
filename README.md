<h1 align="center">
    <img alt="Paradise Sessions" title="Paradise Sessions" src=".github/logo.png" width="300" />
</h1>

<p align="center">
    <a href="#installation">Installation</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="#technologies">Technologies</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="#using">Using</a>&nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="#tests">Tests</a>
</p>

<p align="center">
   <img src="https://img.shields.io/badge/php-%5E8.1-green?style=for-the-badge" alt="Version" />
   <img src="https://img.shields.io/badge/version-1.0-red?style=for-the-badge" alt="PHP Version" />
   <img src="https://img.shields.io/badge/license-MIT-blue?style=for-the-badge" alt="License" />
</p>

## Project

###### Simple session management class of PHP.

Classe simples para gestão de sessões do PHP.

## Installation

###### By [Composer](https://getcomposer.org/).

Via [Composer](https://getcomposer.org/).

```shell
composer require paradisesessions/session
```

## Technologies

-   [PHP 8.1](https://www.php.net/downloads.php#v8.1.18)
-   [PHPUnit](https://phpunit.de/)

## Using

###### Example of use class.

Exemplo de uso da classe.

```php
$options = [];
$session = new ParadiseSessions\Session($options);

// set session
$session->set('email', 'name@server.com');

// verify exists
if ($session->has('email')) {
    echo $session->email;
}

// access property
echo $session->email;

// show all
print_r($session->all());

// unset session
$session->unset('email');

// destroy session
$session->destroy();
```

## Tests

###### Test class with [PHPUnit](https://phpunit.de/).

Testes na classe realizados com [PHPUnit](https://phpunit.de/).

```shell
composer test
```
