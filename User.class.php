<?php
abstract class User{
    protected $_username;
    protected $_password;

    //一个方法,实现登陆和注册功能
    abstract function _query();

    //验证
    abstract function _check();
}