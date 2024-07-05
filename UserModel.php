<?php


namespace ghostytom\mvc_core_framework;


use ghostytom\mvc_core_framework\db\DbModel;

abstract class UserModel extends DbModel
{

    abstract public function getDisplayName(): string;

}