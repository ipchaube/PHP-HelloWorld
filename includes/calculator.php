<?php
/*
 * Author: Indu Prakash Chaube
 * Subject: calculator class in php
 */

class calculator{

    function __construct() {
        //Nothing to construct for now
    }

    function __destruct() {
        //Nothing to destruct for now
    }

    //Method to add two mumbers
    function add_num($a, $b){
        $sum_total = ((float)$a) + ((float)$b);
        return $sum_total;

    }

}
?>