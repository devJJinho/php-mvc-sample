<?php 
Class Application{
    //var은 클래스 멤버변수 선언할때 사용
    var $param;
    function __construct(){
        //get에서 param 분리
        $this->getParam();
        //param 값에 따라 contorller 호출 (autoload 사용)
        //echo $this->param->page_type;

        //class 호출
        new $this->param->page_type($this->param);
    }
    function getParam(){
        $get=$_GET['param'];
        echo $_GET['param'];
        //$page_type=filter_input(INPUT_GET, 'page_type', FILTER_SANITIZE_STRING); //param 분리
        if(isset($_GET['param'])){
            $get=explode("/",$_GET['param']);
        }
        //echo $get[0];
        //page_type/action/index
        $param=[];
        $param['page_type']=isset($get[0])&&$get[0]!=''?$get[0]:"main";
        $param['action']=isset($get[1])&&$get[1]!=''?$get[1]:NULL;
        $this->param=(object)$param;
    }

}

?>