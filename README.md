# Gold and Silver Prices
## Installation

You can install the package via [Composer](https://getcomposer.org).

```bash
composer require maree/goldpricez
```
Publish your goldpricez config file with

```bash
php artisan vendor:publish --provider="Maree\GoldPricez\GoldPricezServiceProvider" --tag="GoldPricez"
```
then change your GoldPricez config from config/GoldPricez.php file
```php
    "API_KEY"  => "",
```
- create 'API_KEY' from here http://goldpricez.com/key/registration

## Usage

## Get Prices


```php
use Maree\GoldPricez\GoldPricez;
    $options = ['currency' => 'egp','measure'=>'gram','metal'=>'all'];
    $response = GoldPricez::getPrices($options); 

```
## notes
- to get only gold prices remove 'metal' option from options array 

## documentaion
- http://goldpricez.com/about/api
