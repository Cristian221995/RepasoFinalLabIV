<?php
namespace daos\lists;
use interfaces\IDao as IDao;
use daos\SingletonDao as SingletonDao;

class MarioList extends SingletonDao implements IDao
{
    private $list;
    public function __construct()
    {
        $this->list = array();
    }

    public function getSessionMario()
    {
        if (!isset($_SESSION['marioList'])) {
            $_SESSION['marioList'] = array();
        }
        return $_SESSION['marioList'];
    }

    public function setSessionmario($value)
    {
        $_SESSION['marioList'] = $value;
    }

    public function insert($mario)
    {
        $this->list=$this->getSessionmario();
        array_push($this->list, $mario);
        $this->setSessionmario($this->list);

    }

    public function delete($dato){
        $this->list=$this->getSessionMario();
       
            foreach ($this->list as $key => $value) {
                if($value->getTitle()===$dato){
                    unset($this->list[$key]);
                    $this->setSessionMario($this->list);
                }
            }
        
    }

    public function update($dato, $datoNuevo){
    
    }

    public function retride(){
        $this->list=$this->getSessionMario();
        return $this->list;
    }

}
