<?php
/**
 * Created by PhpStorm.
 * User: takahiro
 * Date: 2017/02/14
 * Time: 22:29
 */
require_once 'business_person.php';

class EliteBusinessPerson extends BusinessPerson {
    public function work()
    {
        print "<p>{$this->first_name}{$this->last_name}はバリバリバリバリ働いています</p>";
    }
}