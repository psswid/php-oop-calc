<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 31.01.2018
 * Time: 20:20
 */

class Divider implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result / $number;
    }
}