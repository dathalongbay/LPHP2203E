<?php

class PhpStringUtility {
    public $string;

    public function __construct($stringParam)
    {
        $this->string = $stringParam;
    }

    public function countStringLength($string = '') {
        if (!is_string($string)) {
            return false;
        }
        return strlen($string);
    }

    public function convertStringToArray($string) {

    }

    public function countWord(){

    }

    public function stringReplace(){

    }
}
