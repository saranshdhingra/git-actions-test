<?php

namespace App;

class Operations {
    public function multiply($val) {
        if (gettype($val) !== 'integer' && gettype($val) !== 'double')
            throw new \Exception("Invalid types!");
            
        return $val * 2;
    }
}