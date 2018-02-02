<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 31.01.2018
 * Time: 19:33
 */

class Adder implements OperatorInterface
{
    public function run($number, $result){
        return $result + $number;
    }
}