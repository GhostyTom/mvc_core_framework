<?php


namespace ghostytom\core;


use ghostytom\core\db\DbModel;

abstract class UserModel extends DbModel
{

    abstract public function getDisplayName(): string;

}