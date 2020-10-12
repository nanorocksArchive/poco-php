<p align="center">
  <img src="https://i.ibb.co/vqRxbNk/Screenshot-from-2020-10-12-11-22-22-2.png" alt="logo"/>
</p>
<p align="center">
  <i>Ready to help you quickly write simple well designed web applications and APIs.</i>
</p>


### Installation
It's recommended that you use [Composer](https://getcomposer.org/) to install pocoPHP.

```bash
$ composer create-project nanorocks/pocophp <project_name>
```

This will install pocoPHP and all required dependencies. pocoPHP requires PHP 7.1 or newer.

### Frameworks skeleton
We demnostrate for how to build url shortener and how to organize your code. It's easy to follow and to make clean-up. Currently we don't support full-doc for this framework.  

### Core packages and autoload
- [Templating Twig](https://packagist.org/packages/twig/twig)
- [Eloquent ORM](https://packagist.org/packages/illuminate/database)
- [Pimple Dependency Injection Container](https://packagist.org/packages/pimple/pimple)
- [Bramus router](https://packagist.org/packages/bramus/router)
- [PSR-4](https://www.php-fig.org/psr/psr-4/)

in composer.json
````bash
"require": {
  "twig/twig": "^3.0",
  "illuminate/database": "^6.14",
  "pimple/pimple": "^3.2",
  "bramus/router": "^1.4",
  "illuminate/events": "^6.15",
  "illuminate/container": "^6.15"
},
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
}
````


### License
The pocoPHP framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Support me
<a href='https://ko-fi.com/P5P41IKP9' target='_blank'><img height='36' style='border:0px;height:36px;' src='https://cdn.ko-fi.com/cdn/kofi1.png?v=2' border='0' alt='Buy Me a Coffee at ko-fi.com' /></a>
