<?php
Class Controller{
    var $param;
    var $title;
    var $db;
    var $action;

    function __construct($param){
        $this->param=$param;
        $Model_name="Model_{$this->param->page_type}";
        try{
            $this->db=new $Model_name($this->param);
            echo "db ok";
        }
        catch(Exception $e){
            echo $e->getMessage();
            echo "db not ok";
        }
        //모델 이름 선택하기
        //여기서 db 연결하기
        //상속에 대해 이해하고 하기
        //db 연결은 부모에서 진행함
        //method()실행도 부모에서 해줌
        $this->index();
    }

    function index(){
        $method=isset($this->param->action)?$this->param->action:'basic';
        if(method_exists($this,$method)){
            $this->$method();
        }
        $this->getTitle();
        $this->head();
        $this->content();
        $this->footer();
    }

    function head(){
        require_once(_VIEW."head.php");
    }
    function footer(){
        require_once(_VIEW."footer.php");
    }
    function content(){
        $dir;
        if(isset($this->param->action)){
            $dir=_VIEW."{$this->param->page_type}/{$this->param->action}.php";
        }
        else{
            $dir=_VIEW."{$this->param->page_type}/{$this->param->page_type}.php";
        }
        require_once($dir);
    }

    function getTitle(){
        $this->title='MVC Model';
    }
}
?>