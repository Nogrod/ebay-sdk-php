# nogrod/ebay-sdk-php
=======

eBaySDK PHP

# Installation

## Download the Bundle

Require the bundle in your `composer.json` file:

``` bash
$ composer require nogrod/ebay-sdk-php
```

## Download latest WSDL/XSD

Add new WSDL/XSD to `config.yaml` if needed

``` bash
$ composer run-script download
```

## Build Classes

Add new <WSDL/XSD Name>.yaml to config folder if needed

``` bash
$ composer run-script build
```

The generated types read and write themselves through XMLReader/XMLWriter (via
sabre/xml); there is no JMS metadata. `TradingClient::serialize($object, 'json')`
gives the element and attribute names as keys.

## Tests

``` bash
$ composer test
```

The build runs them as its last step. They cover what eBay is strict about,
above all that every request in a bulk data exchange file declares its own
`xmlns`.

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license.
