<?php

namespace Url;

class Shortner 
{
    private $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    
    private $base;

    public function __construct ($alphabet = null)
    {
        $this->setAlphabet($alphabet);
    }

    /**
     * Identify a set of possible output characters.
     * 
     * @param string $alphabet
     * 
     * @return self
     */
    public function setAlphabet ($alphabet)
    {
        if (!is_null($alphabet)) {
            $this->alphabet = $alphabet;
        }

        $this->base = strlen($this->alphabet);

        return $this;
    }

    /** 
     * This takes an input ID and produces a short URL suffix.
     * 
     * @param int $id
     * 
     * @return string
     */    
    public function encode ($id)
    {
        $n          = $id;
        $encodedStr = "";

        while ($n) {
            $encodedStr .= $this->alphabet[$n % $this->base];
            $n           = floor($n / $this->base);
        }

        return strrev($encodedStr);
    }

    /**
     * This converts a short URL into the corresponding ID.
     *
     * @param string $shortUrl
     * 
     * @return int
     */
    public function decode ($shortUrl)
    {
        $id  = 0;
        $len = strlen($shortUrl);
        $str = str_split($shortUrl);

        for ($i = 0; $i < $len; $i++) {
            $id = $id * $this->base + strpos($this->alphabet, $str[$i]);
        }

        return $id;
    }
}