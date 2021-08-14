<?php
Class Controller{
    var $param;
    var $title;
    function __construct($param){
        $this->param=$param;
        $this->index();
        //모델 이름 선택하기
        //여기서 db 연결하기
        //상속에 대해 이해하고 하기
        //db 연결은 부모에서 진행함
        //method()실행도 부모에서 해줌


    }
    function index(){
        $method=isset($this->param->action)?$this->param->action:'basic';
        if(method_exists($this,$method)){
            $this->$method();
        }
        $this->content();
    }

    function content(){
        require_once(_VIEW."{$this->param->page_type}.php");
    }

    function getTitle(){
        $this->title=$this->param->title;
    }


}
?>