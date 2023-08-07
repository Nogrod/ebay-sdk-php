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

## Build Classes/Metadata

Add new <WSDL/XSD Name>.yaml to config folder if needed

``` bash
$ composer run-script build
```

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license.
