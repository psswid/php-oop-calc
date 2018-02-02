<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 31.01.2018
 * Time: 20:18
 */

class Multiplier implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result * $number;
    }
}