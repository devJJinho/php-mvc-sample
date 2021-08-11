<?php 
Class Application{
    //var은 클래스 멤버변수 선언할때 사용
    var $param;
    function __construct(){
        //get에서 param 분리
        $this->getParam();
        //param 값에 따라 contorller 호출 (autoload 사용)
        new $this->param->page_type($this->param);
    }
    function getParam(){
        $page_type=filter_input(INPUT_GET, 'page_type', FILTER_SANITIZE_STRING); //param 분리
        if(!isset($page_type)){
            //기본은 로그인
            $page_type="main";
        }
        $param=[];
        $param['page_type']=$page_type;
        $param['action']=NULL;
        $this->param=(object)$param;
    }

}