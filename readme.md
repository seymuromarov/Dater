## About Project

Laravel api for converting date for humans reading

## Requirements

* [Composer](https://getcomposer.org/)
* [Carbon](https://carbon.nesbot.com/)
* [Laravel](https://laravel.com/)

## Installation

Require package:
``` bash
composer require seymuromarov/dater
```
For laravel versions below 5.5 you must add provider and alias if your version is 5.5+ you must skip adding alias and provider \
Now add the service provider in config/app.php file:
```  
'providers' => [
    // ...
        Seymuromarov\Dater\DaterServiceProvider::class,
],
```

after this add alias in config/app.php file:

``` 
'aliases' => [
 //...
        'Randomcrap' => Seymuromarov\Dater\Facades\Dater::class,
 ],
```

use command (optional): 
``` 
composer dump-autoload
```
now u can use api like this 
```
use Seymuromarov\Dater\Facades\Dater; //it is not necessary
 
    $date="2018-01-05";
    $format="d,m,y"; 
    $lang="en"; // az, ru u can ask for more languages
    Dater::convert($date,$format,$lang); 
    Dater::convert($date,$format); //$default lang is english
    //result: 5 January 2017

```


more formats are available \
available formats are :
```
//m,m-1,m-2,m-3,m-4,m-5,m-6... it will just grab substring from month with given length
//d only 1 day format is available
//y only 1 year format is available

```
Some examples are given below :
```

use Seymuromarov\Dater\Facades\Dater; //it is not necessary

    $date="2018-01-05";
    $format="d,m3,y"; 
    Dater::convert($date,$format);
    //result: 5 Jan 2017
    $format="d,m3,y2"; 
    Dater::convert($date,$format);
    //result: 5 Jan 17
    $format="m3,d,y2"; 
    Dater::convert($date,$format);
    //result: Jan 5 17

```

