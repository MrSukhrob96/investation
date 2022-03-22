<?php

namespace App\Services;

class CodeGenerator {

    public function __construct()
    {
        
    }

    public static function generate()
    {
        return rand(10000000, 99999999);
    }

}