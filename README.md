### The package

[![Latest Stable Version](https://poser.pugx.org/hamidgh83/url_shortner/v)](//packagist.org/packages/hamidgh83/url_shortner)
[![Total Downloads](https://poser.pugx.org/hamidgh83/url_shortner/downloads)](//packagist.org/packages/hamidgh83/url_shortner)
[![Dependents](https://poser.pugx.org/hamidgh83/url_shortner/dependents)](//packagist.org/packages/hamidgh83/url_shortner)
[![License](https://poser.pugx.org/hamidgh83/url_shortner/license)](//packagist.org/packages/hamidgh83/url_shortner)

# URL shortener Base-X encoder/decoder

This is a general purpose library to encode/decode an integer number. Given a string of valid alphabets you can encode your number into a small string. 

A possible use case of this library is to use it as a url shortner. Just get the corresponding id of the url (from database) and encode it through this library. In this way you don't need to store the hash value in the DB and you will be able to change your encryption algorithm at any time.


### Possible use cases
* Shorten URLs
* Two way comunication 
* Hash generation
* ...


### Examples 

**Example 1)**
    
    $num = 98201564;

    $shotrner = new Shortner;
    $encodedStr = $shotrner->encode($num);
    echo $encodedStr;

    $decodedStr = $shotrner->decode($encodedStr);
    echo "\n" . $encodedStr;


Outputs: 
    
    gOcSm
    98201564

**Example 2)**
    
    $alphabets = "abcdefghijklmnopqrstuvwxyz";
    $num = 98201564;

    $shotrner = new Shortner($alphabets);
    $encodedStr = $shotrner->encode($num);
    echo $encodedStr;

    $decodedStr = $shotrner->decode($encodedStr);
    echo "\n" . $encodedStr;
    
Outputs:
    
    igxgpg
    98201564
