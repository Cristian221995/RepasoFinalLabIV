<?php
namespace daos\lists;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;
use models\User as User;

class UserList extends SingletonDao implements IDao
{
    private $list;
    public function __construct()
    {
        $this->list = array();
    }

    public function setUserList(){
        $user = new User(1, "demo@demo", "demo");
        $this->insert($user);
    }



    public function getSessionUser()
    {
        if (!isset($_SESSION['userList'])) {
            $_SESSION['userList'] = array();
        }
        return $_SESSION['userList'];
    }
    public function setSessionUser($value)
    {
        $_SESSION['userList'] = $value;
    }

    public function insert($user)
    {
        $this->list=$this->getSessionUser();
        array_push($this->list, $user);
        $this->setSessionUser($this->list);

    }

    public function delete($dato){
        
    }

    public function update($dato, $datoNuevo){
    
    }

    public function retride(){
        $this->list=$this->getSessionUser();
        return $this->list;
    }

}
