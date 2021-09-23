<?php
//主类 控制载入界面，处理数据
class Main{

    private $_index;

    public function __construct($_index = 'start'){
        $this->_index = $_index;
    }
    public function _run(){

    }
    //创建一个载入界面
    public function _ui(){
        $_filename = $this->_index . ".inc.php";
        if(file_exists($_filename)){
            return $_filename;
        }else {
            return 'start.inc.php';
        }
    }

    //创建一个方法来接受登陆和发送的操作
    public function _send(){
        return $_POST['send'];
    }

}