test-packagist-simplecalc - Simple calculator example.
==================

An example application that implements new php7.0 ... 7.4 features.
The following features are used:

- strict mode
- grouping of import declarations
- scalar type declarations, type hints
- throwable exception
- return type void
- typed class properties
- null in typed and returned parameters
- unicode codepoint escape syntax
etc.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require  nechiporenko/test-packagist-simplecalc
```

## Requirements

PHP 7.4 and above.

## Usage

Once the extension is installed, use the library in client code:

```use Nechiporenko\Classes\App;

	$app = new App();

	$app->execute(12, 3);
	$app->execute(5, 2);
	$app->showTotal();
```

## License

Code released under [MIT License](LICENSE).

## Contact

Should you have any comments or questions, please contact us at [s.nechiporenko@gmail.com](mailto:s.nechiporenko@gmail.com).
