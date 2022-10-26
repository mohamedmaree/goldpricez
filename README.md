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

## Response Examples

- in Success 
```php
  +"ounce_price_usd": "1667.72"
  +"gmt_ounce_price_usd_updated": "26-10-2022 04:30:02 pm"
  +"ounce_price_ask": "1667.72"
  +"ounce_price_bid": "1667.4"
  +"ounce_price_usd_today_low": "1649.67"
  +"ounce_price_usd_today_high": "1675.12"
  +"usd_to_egp": "19.7082"
  +"gmt_egp_updated": "26-10-2022 04:05:00 pm"
  +"ounce_in_egp": 32867.759304
  +"silver_ounce_in_egp": 385.8077232
  +"gram_to_ounce_formula": 0.0321
  +"gram_in_usd": 53.533812
  +"gram_in_egp": 1055.0550736584
  +"silver_gram_in_usd": 0.6283896
  +"silver_gram_in_egp": 12.38442791472
  +"silver_ounce_price_ask_egp": 386.1427626
  +"silver_ounce_price_bid_egp": 385.4726838
  +"silver_ounce_price_egp_today_low": 374.948505
  +"silver_ounce_price_egp_today_high": 390.3603174
```

- in Error 
```php
  +"status": false
  +"error": "This API key has reached the time limit for this method"
```
## documentaion
- http://goldpricez.com/about/api
