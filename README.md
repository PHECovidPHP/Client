# PHE Covid PHP API Client

We present a [PHE Covid API](https://coronavirus.data.gov.uk/details/developers-guide) client for PHP.

<p align="center">
<a href="https://github.com/PHECovidPHP/Client/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/PHECovidPHP/Client/Tests?label=Tests&style=flat-square" alt="Build Status"></img></a>
<a href="https://github.styleci.io/repos/327372053"><img src="https://github.styleci.io/repos/327372053/shield" alt="StyleCI Status"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square" alt="Software License"></img></a>
<a href="https://packagist.org/packages/covid-19/client"><img src="https://img.shields.io/packagist/dt/covid-19/client?style=flat-square" alt="Packagist Downloads"></img></a>
<a href="https://github.com/PHECovidPHP/Client/releases"><img src="https://img.shields.io/github/release/PHECovidPHP/Client?style=flat-square" alt="Latest Version"></img></a>
</p>

Check out the [change log](CHANGELOG.md), [releases](https://github.com/PHECovidPHP/Client/releases), [security policy](https://github.com/PHECovidPHP/Client/security/policy), [license](LICENSE), [code of conduct](.github/CODE_OF_CONDUCT.md), and [contribution guidelines](.github/CONTRIBUTING.md).


## Installation

This version supports [PHP](https://php.net) 7.2-8.0. To get started, simply require the project using [Composer](https://getcomposer.org). You will also need to install packages that "provide" [`psr/http-client-implementation`](https://packagist.org/providers/psr/http-client-implementation) and [`psr/http-factory-implementation`](https://packagist.org/providers/psr/http-factory-implementation).

```bash
$ composer require phe-covid/client:^1.0 guzzlehttp/guzzle:^7.2 http-interop/http-factory-guzzle:^1.0
```

We are decoupled from any HTTP messaging client by using [PSR-7](https://www.php-fig.org/psr/psr-7/), [PSR-17](https://www.php-fig.org/psr/psr-17/), [PSR-18](https://www.php-fig.org/psr/psr-18/), and [HTTPlug](https://httplug.io/). You can visit [HTTPlug for library users](https://docs.php-http.org/en/latest/httplug/users.html) to get more information about installing HTTPlug related packages.


### Examples

Coming soon!


## Contributing

We will gladly receive issue reports and review and accept pull requests, in accordance with our [code of conduct](.github/CODE_OF_CONDUCT.md) and [contribution guidelines](.github/CONTRIBUTING.md)!

```
$ make install
$ make test
```


## Security

If you discover a security vulnerability within this package, please send an email to Graham Campbell at graham@alt-three.com. All security vulnerabilities will be promptly addressed. You may view our full security policy [here](https://github.com/PHECovidPHP/Client/security/policy).


## License

PHE Covid PHP API Client is licensed under [The MIT License (MIT)](LICENSE).
