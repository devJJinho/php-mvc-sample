<?php 
spl_autoload_register(function ($className){
    $className=strtolower($className);
    $regClassName=preg_replace('/(model|application)(.*)/',"$1",$className);//model|application 둘 중 하나인지만 필요하기 때문에 (앞과)(.*)으로 나눔
    switch($regClassName){
        case 'application' : $dir=_APP; break;
        case 'model' : $dir=_MODEL; break;
        default : $dir=_CONTROLLER; break;
    }
    //불러오는건 php이지만 생성된는건 class
    require_once("{$dir}{$className}.php");
});

function setError($errorMSG){
    new Error($errorMSG);
}
?>