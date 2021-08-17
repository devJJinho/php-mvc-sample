<?php
    define('_DB_ID',"root");
    define('_DB_PW','123456');
    define('_DB_HOST','localhost');
    define('_DB_PORT','3306');
    define('_DB_NAME','basic');

    //굳이 인터페이스 사용 할 필요가 없다
    //mysqli_connect에선 db마다 같은 인터페이스를 가지기 위해 이렇게 구현해야했다면
    //PDO의 경우 db 종류에 상관없이 같은 구조를 갖기 때문에 그럴 필요가 없다.

    // interface dbSwitch{
    // public function query($query); # 쿼리 
    // public function insert($table); # 저장 
    // public function update($table,$where); # 수정 
    // public function delete($table,$where); # 삭제 
    // public function bindParams($query,$args=array()); #쿼리 문자 바인드효과
    // }

    class Model {
        var $db;
        var $column;
        var $table;
        var $action;
        var $sql;

        function __construct($param){
            $this->param=$param;
            try{
                $this->db=new PDO("mysql:host="._DB_HOST.";dbname="._DB_NAME.";charset=utf8",_DB_ID,_DB_PW);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if(isset($_POST['action'])){
                    $this->action=$_POST['action'];
                    $this->action();
                }
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }

        function query($query,$values=false){
            try{
                $res=$this->db->prepare($query);
                if($values!=false){
                foreach($values as $value){
                    $res->bindValue($value, $values[$value]);
                }
                }
                $res->execute();
                return $res;
            }
            catch(Exception $e){
                echo "<pre>";
                echo $query;
                echo "</pre>";
            }
        }

        public function fetch($sql,$values=false){
            return $this->query($sql,$values)->fetch();
     
        }

        public function fetchAll($sql,$values=false){
            return $this->query($sql,$values)->fetchAll();
        }

        public function cnt($sql,$values=false){
            return $this->query($sql,$values)->rowCount();
        }
    }


?>
